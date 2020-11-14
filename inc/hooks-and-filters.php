<?php
/**
 * Add your custom hooks and filter here
 * 
 * @package pahina
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

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



// Add Bootstrap classes to comment form fields.
add_filter( 'comment_form_default_fields', 'pahina_bootstrap_comment_form_fields' );

if ( ! function_exists( 'pahina_bootstrap_comment_form_fields' ) ) {
	/**
	 * Add Bootstrap classes to WP's comment form default fields.
	 *
	 * @param array $fields {
	 *     Default comment fields.
	 *
	 *     @type string $author  Comment author field HTML.
	 *     @type string $email   Comment author email field HTML.
	 *     @type string $url     Comment author URL field HTML.
	 *     @type string $cookies Comment cookie opt-in field HTML.
	 * }
	 *
	 * @return array
	 */
	function pahina_bootstrap_comment_form_fields( $fields ) {

		$replace = array(
			'<p class="' => '<div class="form-group ',
			'<input'     => '<input class="form-control" ',
			'</p>'       => '</div>',
		);

		if ( isset( $fields['author'] ) ) {
			$fields['author'] = strtr( $fields['author'], $replace );
		}
		if ( isset( $fields['email'] ) ) {
			$fields['email'] = strtr( $fields['email'], $replace );
		}
		if ( isset( $fields['url'] ) ) {
			$fields['url'] = strtr( $fields['url'], $replace );
		}

		$replace = array(
			'<p class="' => '<div class="form-group form-check ',
			'<input'     => '<input class="form-check-input" ',
			'<label'     => '<label class="form-check-label" ',
			'</p>'       => '</div>',
		);
		if ( isset( $fields['cookies'] ) ) {
			$fields['cookies'] = strtr( $fields['cookies'], $replace );
		}

		return $fields;
	}
} // End of if function_exists( 'pahina_bootstrap_comment_form_fields' )

// Add Bootstrap classes to comment form submit button and comment field.
add_filter( 'comment_form_defaults', 'pahina_bootstrap_comment_form' );

if ( ! function_exists( 'pahina_bootstrap_comment_form' ) ) {
	/**
	 * Adds Bootstrap classes to comment form submit button and comment field.
	 *
	 * @param string[] $args Comment form arguments and fields.
	 *
	 * @return string[]
	 */
	function pahina_bootstrap_comment_form( $args ) {
		$replace = array(
			'<p class="' => '<div class="form-group ',
			'<textarea'  => '<textarea class="form-control" ',
			'</p>'       => '</div>',
		);

		if ( isset( $args['comment_field'] ) ) {
			$args['comment_field'] = strtr( $args['comment_field'], $replace );
		}

		if ( isset( $args['class_submit'] ) ) {
			$args['class_submit'] = 'btn btn-secondary mt-3';
		}

		return $args;
	}
} // End of if function_exists( 'pahina_bootstrap_comment_form' ).


// Add note if comments are closed.
add_action( 'comment_form_comments_closed', 'pahina_comment_form_comments_closed' );

if ( ! function_exists( 'pahina_comment_form_comments_closed' ) ) {
	/**
	 * Displays a note that comments are closed if comments are closed and there are comments.
	 */
	function pahina_comment_form_comments_closed() {
		if ( get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'pahina' ); ?></p>
			<?php
		}
	}
} // End of if function_exists( 'pahina_comment_form_comments_closed' ).


// WooCommerce

function pahina_wc_bootstrap_form_field_args ($args, $key, $value) { 
  
	$args['input_class'][] = 'form-control'; 
	return $args; 
  }
  add_filter('woocommerce_form_field_args','pahina_wc_bootstrap_form_field_args', 10, 3);


  