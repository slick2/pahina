<?php
/**
 * Add your custom hooks and filter here
 * 
 * @package pahina
 */

/**
 * Search Filter
 */

function custom_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="custom-search-form">
	  	<div class="input-group">
		<input class="form-control" placeholder="search..." type="text" value="' . get_search_query() . '" name="s" id="s" />
			<div class="input-group-append">
				<input class="btn btn-primary" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
			</div>
		</div>
	</div>
	</form>';
  
	return $form;
  }
add_filter( 'get_search_form', 'custom_search_form', 100 );


/** Comments */
function modify_pahina_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="7" aria-required="true"></textarea></p>';
    return $arg;
}

add_filter('comment_form_defaults', 'modify_pahina_comment_form_text_area');


// Read More

add_filter( 'excerpt_more', 'pahina_custom_excerpt_more' );

if ( ! function_exists( 'pahina_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function pahina_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'pahina_all_excerpts_get_more_link' );

if ( ! function_exists( 'pahina_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function pahina_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary pahina-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __(
				'Read More...',
				'pahina'
			) . '</a></p>';
		}
		return $post_excerpt;
	}
}