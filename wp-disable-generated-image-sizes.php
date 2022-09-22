<?php
/**
 * Plugin Name:  Wp Disable Generated image sizes
 * Plugin URI:   https://github.com/andriilive/wp-disable-image-sizes
 * Description:  Disable Wordpress & plugins image sizes. No need for configuration, activate and go
 * Version:      0.1.0
 * Author:       DigitalAndy
 * Author URI:   https://github.com/andriilive
 * License:      MIT License
 *
 * @package         Wp_Disable_Image_Sizes
 */

global $_wp_additional_image_sizes;

// Disable all image sizes
add_filter('intermediate_image_sizes', '__return_empty_array', 999);
// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');
add_filter('wp_image_maybe_exif_rotate', '__return_false');

function remove_default_image_sizes( $sizes) {
    unset( $sizes['large']); // Added to remove 1024
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['1536x1536']);
    unset( $sizes['2048x2048']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

remove_image_size('1536x1536');
remove_image_size('2048x2048');

update_option( 'thumbnail_size_h', 0 );
update_option( 'thumbnail_size_w', 0 );
update_option( 'medium_size_h', 0 );
update_option( 'medium_size_w', 0 );
update_option( 'medium_large_size_w', 0 );
update_option( 'medium_large_size_h', 0 );
update_option( 'large_size_h', 0 );
update_option( 'large_size_w', 0 );

add_action( 'init', function () {
    remove_image_size( '1536x1536' );             // 2 x Medium Large (1536 x 1536)
    remove_image_size( '2048x2048' );             // 2 x Large (2048 x 2048)
} );
