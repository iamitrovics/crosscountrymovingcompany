<?php
/**
 * Custom image sizes
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('preview-image', 300, 200, TRUE);
add_image_size('full-image', 1200, 9999, FALSE);

// Home
add_image_size('why-image', 620, 620, TRUE);
add_image_size('portfoliothumb-image', 360, 600, TRUE);

// Blog
add_image_size('blog-image', 712, 474, TRUE);
add_image_size('city-image', 900, 900, TRUE);
add_image_size('cityside-image', 550, 850, true);