<?php
/**
 * SC Codes Child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Enqueue scripts and styles.
 */
function sc_codes_child_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'sc_codes_child_styles' );
