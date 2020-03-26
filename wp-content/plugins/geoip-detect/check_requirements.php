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

function geoip_detect_version_check() {
	if (empty($GLOBALS['wp_version']))
		require(ABSPATH . '/wp-includes/version.php');
	else
		$wp_version = $GLOBALS['wp_version'];
		

	if (version_compare ( PHP_VERSION, GEOIP_REQUIRED_PHP_VERSION, '<' )) {
		$flag = 'PHP';
		$min = GEOIP_REQUIRED_PHP_VERSION;
		$yours = PHP_VERSION;
		
		$message = 'Plugin GeoIP Detection is disabled. Requires ' . $flag . ' ' .$min ." (you're using " . $flag . " " . $yours . ") ";
	} elseif (version_compare ( $wp_version, GEOIP_REQUIRED_WP_VERSION, '<' )) {
		$flag = 'WordPress';
		$min = GEOIP_REQUIRED_WP_VERSION;
		$yours = $wp_version;
		
		$message = 'Plugin GeoIP Detection is disabled. Requires ' . $flag . ' ' .$min ." (you're using " . $flag . " " . $yours . ") ";
	} else {
		return true;
	}

	if (WP_DEBUG)
		trigger_error($message);

	add_action ( 'all_admin_notices', 'geoip_detect_version_minimum_requirements_notice' );

	return false;
}

function geoip_detect_version_minimum_requirements_notice() {
	if (empty($GLOBALS['wp_version']))
		require(ABSPATH . '/wp-includes/version.php');
	else
		$wp_version = $GLOBALS['wp_version'];
	?>
<div class="error">
	<h3><?php _e( 'GeoIP Detection: Minimum requirements not met.', 'geoip-detect' ); ?></h3>
	<p>
		The plugin <strong>GeoIP Detection</strong> plugin requires PHP <?php echo GEOIP_REQUIRED_PHP_VERSION; ?> (you're using PHP <?php echo PHP_VERSION; ?>) and WordPress version <?php echo GEOIP_REQUIRED_WP_VERSION; ?> (you're using: <?php echo $wp_version; ?>) and therefore does exactly nothing.</p>
	<p>
		You can update, or install an <a href="https://github.com/yellowtree/wp-geoip-detect/releases">1.x legacy version</a> of this plugin instead.
	</p>
</div>
<?php
}
