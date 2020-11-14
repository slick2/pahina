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

				<?php if (have_posts()) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Search Results for: %s', 'pahina'), '<span>' . get_search_query() . '</span>');
							?>
						</h1>
					</header><!-- .page-header -->

				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

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
