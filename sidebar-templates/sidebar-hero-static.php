<?php
/**
 * Sidebar setup for hero static
 *
 * @package Pahina
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'pahina_container_type' );

?>

<?php if ( is_active_sidebar( 'hero-static-sidebar' ) ) : ?>

	<!-- ******************* The Hero Static Widget Area ******************* -->

	<div class="wrapper" id="wrapper-hero-static">

    <?php dynamic_sidebar( 'hero-static-sidebar' ); ?>

    </div><!-- #wrapper-Hero Static -->

	<?php
endif;