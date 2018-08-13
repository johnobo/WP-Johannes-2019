<?php

/*
 *
 * S T Y L E S
 *
 */

function theme_css() {
	$theme_object = wp_get_theme();
	$version      = $theme_object["Version"];

	/* Dequeue Unyson Styles */
	if (!is_admin()) {
		wp_dequeue_style('fw-ext-builder-frontend-grid');
		wp_dequeue_style('fw-ext-forms-default-styles-css');
	}

	wp_enqueue_style( 'barlow_font', 'https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,500,700', array(), '1.0' );
	wp_enqueue_style( 'uikit_css',   theme_get_folder( 'css' ) . 'uikit3/uikit.min.css', array(), '3.0.0beta35' );
	wp_enqueue_style( 'prism_css',   theme_get_folder( 'css' ) . 'prism.css',            array(), '1.0' );
	wp_enqueue_style( 'theme_css',   theme_get_folder()        . 'style.css',            array(), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_css', 100 );



/*
 *
 * S C R I P T S
 *
 */

function theme_js() {
	/* Wordpress Scripts entfernen */
	if( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_deregister_script('wp-embed');
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}

	wp_enqueue_script ( 'uikit_js', theme_get_folder( 'js' ) . 'uikit3/uikit.min.js', array(), '3.0.0beta35', true );
	wp_enqueue_script ( 'prism_js', theme_get_folder( 'js' ) . 'prism.js',            array(), '1.0',  true );
	wp_enqueue_script ( 'theme_js', theme_get_folder()       . 'main.js',             array(), '1.2',  true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
