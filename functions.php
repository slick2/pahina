<?php
/**
 *
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! defined( '_Pahina_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_Pahina_VERSION', '1.0.0' );
}

// Includes
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/theme-settings.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/pagination.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/hooks-and-filters.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
