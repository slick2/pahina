<?php
/**
 * pahina Theme Customizer
 *
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pahina_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'pahina_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'pahina_customize_partial_blogdescription',
			)
		);

		// Theme layout settings.
		$wp_customize->add_section(
			'pahina_theme_layout_options',
			array(
				'title'       => __( 'Theme Layout Settings', 'pahina' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'pahina' ),
				'priority'    => apply_filters( 'pahina_theme_layout_options_priority', 160 ),
			)
		);

		/**
		 * Select sanitization function
		 *
		 * @param string               $input   Slug to sanitize.
		 * @param WP_Customize_Setting $setting Setting instance.
		 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
		 */
		function pahina_theme_slug_sanitize_select( $input, $setting ) {

			// Ensure input is a slug (lowercase alphanumeric characters, dashes and underscores are allowed only).
			$input = sanitize_key( $input );

			// Get the list of possible select options.
			$choices = $setting->manager->get_control( $setting->id )->choices;

			// If the input is a valid key, return it; otherwise, return the default.
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

		}

		$wp_customize->add_setting(
			'pahina_container_type',
			array(
				'default'           => 'container',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'pahina_theme_slug_sanitize_select',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pahina_container_type',
				array(
					'label'       => __( 'Container Width', 'pahina' ),
					'description' => __( 'Choose between Bootstrap\'s container and container-fluid', 'pahina' ),
					'section'     => 'pahina_theme_layout_options',
					'settings'    => 'pahina_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'pahina' ),
						'container-fluid' => __( 'Full width container', 'pahina' ),
					),
					'priority'    => apply_filters( 'pahina_container_type_priority', 10 ),
				)
			)
		);
		// End Container

		$wp_customize->add_setting(
			'pahina_sidebar_position',
			array(
				'default'           => 'right',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pahina_sidebar_position',
				array(
					'label'             => __( 'Sidebar Positioning', 'pahina' ),
					'description'       => __(
						'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.',
						'pahina'
					),
					'section'           => 'pahina_theme_layout_options',
					'settings'          => 'pahina_sidebar_position',
					'type'              => 'select',
					'sanitize_callback' => 'pahina_theme_slug_sanitize_select',
					'choices'           => array(
						'right' => __( 'Right sidebar', 'pahina' ),
						'left'  => __( 'Left sidebar', 'pahina' ),
						'both'  => __( 'Left & Right sidebars', 'pahina' ),
						'none'  => __( 'No sidebar', 'pahina' ),
					),
					'priority'          => apply_filters( 'pahina_sidebar_position_priority', 20 ),
				)
			)
		);
		// End Sidebar

	}
}
add_action( 'customize_register', 'pahina_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pahina_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pahina_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pahina_customize_preview_js() {
	wp_enqueue_script( 'pahina-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _Pahina_VERSION, true );
}
add_action( 'customize_preview_init', 'pahina_customize_preview_js' );