<?php
/**
 * Right sidebar check
 *
 * @package Pahina
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

</div><!-- #closing the primary container from /tempalte-part-checker/sidebar-left.php -->

<?php
$sidebar_pos = get_theme_mod( 'pahina_sidebar_position' );

if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) {
	get_template_part( 'sidebar-templates/sidebar', 'right' );
}