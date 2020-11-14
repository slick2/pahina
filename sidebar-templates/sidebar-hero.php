<?php
/**
 * Sidebar setup for hero
 *
 * @package Pahina
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'pahina_container_type' );

?>

<?php if ( is_active_sidebar( 'hero-sidebar' ) ) : ?>

	<!-- ******************* The Hero Carousel Widget Area ******************* -->

	<div class="wrapper" id="wrapper-hero">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php dynamic_sidebar( 'hero-sidebar' ); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    </div><!-- #wrapper-Hero Carousel -->
    
    <script>
        var element = document.querySelector('[data-carousel="carousel-item"]');
        element.classList.add("active");
    </script>

	<?php
endif;