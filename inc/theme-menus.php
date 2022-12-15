<?php
/**
 * Theme basic setup.
 *
 * @package Symbiotica_Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'symb_menu_setup' );

if ( ! function_exists ( 'symb_menu_setup' ) ) {

	function symb_menu_setup() {

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'symb' ),
            'sitemap_menu' => __( 'Sitemap Menu', 'symb' ),
            'services_menu' => __( 'Services Menu', 'symb' ),
            'quick_menu' => __( 'Quick Menu', 'symb' ),
        ) );


	}
}
