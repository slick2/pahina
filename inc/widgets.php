<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pahina_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Hero Static Widget', 'pahina' ),
			'id'            => 'hero-static-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pahina' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Hero Carousel Widgets', 'pahina' ),
			'id'            => 'hero-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pahina' ),
			'before_widget' => '<div id="%1$s" class="carousel-item widget %2$s" data-carousel="carousel-item">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Left', 'pahina' ),
			'id'            => 'left-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pahina' ),
			'before_widget' => '<section id="%1$s" class="mb-3 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Right', 'pahina' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pahina' ),
			'before_widget' => '<section id="%1$s" class="mb-3  widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'pahina' ),
			'id'            => 'footer-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pahina' ),
			'before_widget' => '<section id="%1$s" class="col-md-3  widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pahina_widgets_init' );