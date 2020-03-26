<?php
/*
Copyright 2013-2019 Yellow Tree, Siegen, Germany
Author: Benjamin Pick (wp-geoip-detect| |posteo.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

use YellowTree\GeoipDetect\DataSources\DataSourceRegistry;

function geoip_detect_menu() {
	require_once ABSPATH . '/wp-admin/admin.php';
	add_submenu_page('tools.php', __('GeoIP Detection Lookup', 'geoip-detect'), __('GeoIP Lookup', 'geoip-detect'), 'activate_plugins', GEOIP_PLUGIN_BASENAME, 'geoip_detect_lookup_page');
	add_options_page(__('GeoIP Detection', 'geoip-detect'), __('GeoIP Detection', 'geoip-detect'), 'manage_options', GEOIP_PLUGIN_BASENAME, 'geoip_detect_option_page');
}
add_action('admin_menu', 'geoip_detect_menu');

function geoip_detect_add_settings_link( $links ) {
	$link = '<a href="tools.php?page=' . GEOIP_PLUGIN_BASENAME . '">' . __('Lookup', 'geoip-detect') . '</a>';
	array_push( $links, $link );

	$link = '<a href="options-general.php?page=' . GEOIP_PLUGIN_BASENAME . '">' . __('Options', 'geoip-detect') . '</a>';
	array_push( $links, $link );

	return $links;
}
add_filter( "plugin_action_links_" . GEOIP_PLUGIN_BASENAME, 'geoip_detect_add_settings_link' );


// ------------- Admin GUI --------------------

function geoip_detect_verify_nonce($action) {
	$nonce = isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';
	return wp_verify_nonce( $nonce, 'geoip_detect_' . $action );
}

function geoip_detect_lookup_page()
{
	if (!is_admin())
		return;

	$ip_lookup_result = false;
	$message = '';
	$action = isset($_POST['action']) ? $_POST['action'] : '';

	if (geoip_detect_verify_nonce($action)) {
		switch($action) {
			case 'lookup':
				if (isset($_POST['ip']))
				{
					$request_ip = $_POST['ip'];
					$request_skipCache = !empty($_POST['skip_cache']);
					$options = array('skipCache' => $request_skipCache);

					$request_locales = null;
					if (!empty($_POST['locales']))
						$request_locales = explode(',', $_POST['locales']);

					$start = microtime(true);
					$ip_lookup_result = geoip_detect2_get_info_from_ip($request_ip, $request_locales, $options);
					$end = microtime(true);
					$ip_lookup_duration = $end - $start;
				}
				break;
		}
	}

	include_once(GEOIP_PLUGIN_DIR . '/views/lookup.php');
}

function geoip_detect_option_page() {
	if (!is_admin() || !current_user_can('manage_options'))
		return;

	if (isset($_GET['geoip_detect_part'])) {
		switch ($_GET['geoip_detect_part']) {
			case 'client-ip':
				return geoip_detect_option_client_ip_page();
				break;
		}
	}

	$registry = DataSourceRegistry::getInstance();
	$sources = $registry->getAllSources();

	$message = '';

	$numeric_options = array('set_css_country', 'has_reverse_proxy', 'disable_pagecache', 'ajax_enabled', 'ajax_enqueue_js');
	$text_options = array('external_ip', 'trusted_proxy_ips');
	$option_names = array_merge($numeric_options, $text_options);

	$action = isset($_POST['action']) ? $_POST['action'] : '';

	if (geoip_detect_verify_nonce($action)) {
		switch($action)
		{
			case 'update':
				$registry->setCurrentSource('auto');

				$s = new \YellowTree\GeoipDetect\DataSources\Auto\AutoDataSource();
				$ret = $s->maxmindUpdate();

				if ($ret === true)
					$message .= __('Updated successfully.', 'geoip-detect');
				else
					$message .= __('File was not updated', 'geoip-detect') .': '. $ret;

				break;

			case 'choose':
				$registry->setCurrentSource($_POST['options']['source']);
				break;


			case 'options-source':
				$messages = array();
				foreach ($sources as $s) {
					$ret = $s->saveParameters($_POST);
					if (is_string($ret) && $ret) {
						$messages[] = $ret;
					}
				}
				if ($messages)
					$message .= implode('<br />', $messages);

				break;

			case 'options':
				// Empty IP Cache
				delete_transient('geoip_detect_external_ip');

				if (!empty($_POST['options']['external_ip'])) {
					if (!geoip_detect_is_ip($_POST['options']['external_ip'])) {
						$message .= 'The external IP "' . esc_html($_POST['options']['external_ip']) . '" is not a valid IP.';
						unset($_POST['options']['external_ip']);
					} else if (!geoip_detect_is_public_ip($_POST['options']['external_ip'])) {
						$message .= 'Warning: The external IP "' . esc_html($_POST['options']['external_ip']) . '" is not a public internet IP, so it will probably not work.';
					}
				}


				foreach ($option_names as $opt_name) {
					if (in_array($opt_name, $numeric_options))
						$opt_value = isset($_POST['options'][$opt_name]) ? (int) $_POST['options'][$opt_name] : 0;
					else
						$opt_value = isset($_POST['options'][$opt_name]) ? $_POST['options'][$opt_name] : '';
					update_option('geoip-detect-' . $opt_name, $opt_value);
				}
				break;
		}
	}

    $currentSource = $registry->getCurrentSource();

	$wp_options = array();
	foreach ($option_names as $opt_name) {
		$wp_options[$opt_name] = get_option('geoip-detect-'. $opt_name);
	}

	$ipv6_supported = GEOIP_DETECT_IPV6_SUPPORTED;

	include_once(GEOIP_PLUGIN_DIR . '/views/options.php');
}

function geoip_detect_option_client_ip_page() {
	include_once(GEOIP_PLUGIN_DIR . '/views/client-ip.php');
}

function _geoip_detect_improve_data_for_lookup($data, $shorten_attributes = false) {
	if ($shorten_attributes) {
		$short = [
			'city',
			'subdivisions',
			'country',
			'location'	
		];
		$short = array_combine($short, $short);
		$data = array_intersect_key($data, $short);

		unset($data['city']['geoname_id']);
		unset($data['country']['geoname_id']);
		unset($data['country']['is_in_european_union']);
		unset($data['location']['accuracy_radius']);
		foreach ($data['subdivisions'] as $i => $s) {
			unset($data['subdivisions'][$i]['geoname_id']);
		}
	}

	// Logical order
	$order = [
		'is_empty',
		'city',
		'most_specific_subdivision',
		'subdivisions',
		'postal',
		'country',
		'registered_country',
		'represented_country',
		'continent',
		'location',
		'traits',
		'maxmind',
		'extra'
	];

	uksort($data, function($a, $b) use ($order) {
		$a_found = array_search($a, $order);
		$b_found = array_search($b, $order);

		if ($a_found === false) $a_found = 1000;
		if ($b_found === false) $b_found = 1000;
		return $a_found > $b_found;
	});

	return $data;
}