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
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				<?php
					endif;

					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
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
