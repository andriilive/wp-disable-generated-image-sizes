<?php
/**
 * Plugin Name:  Disable image sizes
 * Plugin URI:   https://github.com/andriilive/wp-disable-image-sizes
 * Description:  Disable Wordpress & plugins image sizes. No need for configuration, activate and go
 * Version:      1.0.0
 * Author:       DigitalAndy | Andrii Ivashchuk
 * Author URI:   https://github.com/andriilive
 * License:      MIT License
 */

// Disable all image sizes
add_filter('intermediate_image_sizes', '__return_empty_array', 998);

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');
add_filter('wp_image_maybe_exif_rotate', '__return_false');
