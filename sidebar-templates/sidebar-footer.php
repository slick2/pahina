<?php
/**
 * Sidebar setup for footer full
 *
 * @package Pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'pahina_container_type' );

?>

<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footer-sidebar' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;