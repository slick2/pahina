<?php
/**
 * Theme Setup
 * 
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'pahina_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pahina_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pahina, use a find and replace
		 * to change 'pahina' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pahina', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'pahina' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pahina_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Custom Header
		add_theme_support( 'custom-header' );

		// Custom Background
		add_theme_support( 'custom-background' );

		// Editor Style
		add_editor_style('assets/editor-style.css');

		// Add Post Formats
		add_action( 'after_setup_theme', 'pahina_post_formats', 11 );
		function pahina_post_formats(){
			add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'video' ) );
		}


		
	}
endif;
add_action( 'after_setup_theme', 'pahina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pahina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pahina_content_width', 640 );
}
add_action( 'after_setup_theme', 'pahina_content_width', 0 );
