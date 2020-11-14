<?php
/**
 * Enqueue scripts and styles.
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function pahina_scripts() {
	wp_enqueue_style( 'pahina-style', get_stylesheet_uri(), array(), _Pahina_VERSION );
	wp_style_add_data( 'pahina-style', 'rtl', 'replace' );
	wp_enqueue_script( 'pahina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _Pahina_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pahina_scripts' );


function pahina_style_scripts() {
   wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.min.css' );
   wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/theme.min.js', array(), true );
   wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap/js/bootstrap.min.js', array(), true );
}
add_action('wp_enqueue_scripts', 'pahina_style_scripts');