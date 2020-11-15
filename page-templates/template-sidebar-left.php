<?php

/**
 * Template Name: Sidebar Left
 * 
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod('pahina_container_type');

get_header();
?>

<div class="page-wrapper" id="wrapper">

	<div class="container">

		<div class="row">

            <div class="col-md-4 widget-area" id="left-sidebar" role="complementary">

                <?php dynamic_sidebar( 'left-sidebar' ); ?>

            </div><!-- #left-sidebar -->

            <div class="col-md-8 content-area" id="primary">

			<main id="primary" class="site-main">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

            </div>


		</div>
		<!--row-->
	</div>
	<!--container-->
</div>
<!--wrapper-->


<?php
get_footer();
