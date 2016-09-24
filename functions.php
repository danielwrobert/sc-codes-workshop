<?php
/**
 * REST-API Theme - ThemeConf Workshop
 *
 * @package REST-API Theme
 */

/**
 * Enqueue Styles & Scripts
 */
function theme_enqueue_styles() {
	wp_enqueue_style( 'rest-api-theme-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	wp_enqueue_script(
		'rest-api-theme-style',
		get_template_directory_uri() . '/js/main.js',
		array( ),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
