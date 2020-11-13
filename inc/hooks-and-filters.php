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
		<input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
			<div class="input-group-append">
				<input class="btn btn-primary" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
			</div>
		</div>
	</div>
	</form>';
  
	return $form;
  }
add_filter( 'get_search_form', 'custom_search_form', 100 );


/**
 * Post Thumbnail
 */

function modify_pahina_post_thumbnail_html($html, $post_id, $post_thumbnail_id, $size, $attr) {
    $id = get_post_thumbnail_id(); 
    $src = wp_get_attachment_image_src($id, $size); 
	$alt = get_the_title($id); 
    $class = $attr['class']; 

    if (strpos($class, 'retina') !== false) {
        $html = '<img src="" alt="" data-src="' . $src[0] . '" data-alt="' . $alt . '" class="' . $class . '" />';
    } else {
        $html = '<img src="' . $src[0] . '" alt="' . $alt . '" class="' . $class . '" />';
    }

    return $html;
}
add_filter('post_thumbnail_html', 'modify_pahina_post_thumbnail_html', 99, 5);