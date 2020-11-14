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

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'pahina'); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pahina'); ?></p>

						<?php
						get_search_form();

						the_widget('WP_Widget_Recent_Posts');
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'pahina'); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$pahina_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'pahina'), convert_smilies(':)')) . '</p>';
						the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$pahina_archive_content");

						the_widget('WP_Widget_Tag_Cloud');
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

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
