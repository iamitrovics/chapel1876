<?php
/**
 * Custom image sizes
 *
 * @package Symbiotica_Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('full-image', 1920, 9999, FALSE);
add_image_size('half-image', 960, 9999, FALSE);

// Home
add_image_size('hero-image', 1920, 900, TRUE);
add_image_size('gal-image', 600, 400, TRUE);

add_image_size('feat-image', 450, 650, TRUE);

add_image_size('service-image', 700, 630, TRUE);