<?php

/**
 * Template Name: Empty
 * 
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'empty' );
endwhile;

get_footer();

?>