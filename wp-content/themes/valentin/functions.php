<?php
function search_filter($query) {    if ( ! is_admin() && $query->is_main_query() ) {    }}add_action( 'pre_get_posts', 'search_filter' );
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'header menu',
		'sidebar_menu' => 'sidebar menu'
	] );
} );
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
















?>