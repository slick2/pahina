<?php
/**
 *
 * @package pahina
 */

if ( ! defined( '_Pahina_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_Pahina_VERSION', '1.0.0' );
}


/**
 * Setup
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueues
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination.php';



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Bootstrap Navwalker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/hooks-and-filters.php';