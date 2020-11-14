<?php

/**
 *
 * @package pahina
 */
$container = get_theme_mod('pahina_container_type');

get_header();
?>

<div class="page-wrapper" id="wrapper">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<?php get_template_part('template-part-checker/sidebar', 'left'); ?>

			<main id="primary" class="site-main">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'single');

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'pahina') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'pahina') . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

			<?php get_template_part('template-part-checker/sidebar', 'right'); ?>

		</div>
		<!--row-->
	</div>
	<!--container-->
</div>
<!--wrapper-->

<?php
get_footer();
