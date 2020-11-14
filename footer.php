<?php
/**
 *
 * @package pahina
 */
$container = get_theme_mod( 'pahina_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="site-info <?php echo esc_attr( $container ); ?>">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pahina' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pahina' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pahina' ), 'pahina', '<a href="http://josephlariosa.com/">Joseph Lariosa</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
