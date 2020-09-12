<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','fontawesome','slick','slick-theme','header-animate','lightbox' ), rand(111,9999) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


require get_stylesheet_directory() . '/inc/wp-bootstrap-navwalker.php';


if ( ! function_exists( 'successkit_setup' ) ) :
	function successkit_setup() {

		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );

	}

endif;

// END ENQUEUE PARENT ACTION


//  Add a new custom grid shortcode module
// Usage [myprefix_custom_grid posts_per_page="4" term="4"]
// You can also go to Visual Composer > Shortcode Mapper to add your custom module
function myprefix_custom_grid_shortcode( $atts ) {

	// Parse your shortcode settings with it's defaults
	$atts = shortcode_atts( array(
		'posts_per_page' => '-1',
		'term'           => ''
	), $atts, 'myprefix_custom_grid' );

	// Extract shortcode atributes
	extract( $atts );

	// Define output var
	$output = '';

	// Define query
	$query_args = array(
		'post_type'      => 'post', // Change this to the type of post you want to show
		'posts_per_page' => $posts_per_page,
	);

	// Query by term if defined
	if ( $term ) {

		$query_args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field'    => 'ID',
				'terms'    => $term,
			),
		);

	}

	// Query posts
	$custom_query = new WP_Query( $query_args );

	// Add content if we found posts via our query
	if ( $custom_query->have_posts() ) {

		// Open div wrapper around loop
		
       
		// Loop through posts
		while ( $custom_query->have_posts() ) {

			// Sets up post data so you can use functions like get_the_title(), get_permalink(), etc
			$custom_query->the_post();

			// This is the output for your entry so what you want to do for each post.
			$output .= '<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="moreBox">';
			$output .= '<div class="blog-content">';
			$output .= '<a href="'.get_permalink().'">';
			$output .= '<div class="hovereffect">';
			
			$output .='<img class="img-responsive" src="http://websitedemoonline.com/successkit/wp-content/uploads/2020/02/Untitled-1.jpg" alt="">';
			$output .='<div class="overlay">';
			$output .='<h5>'.get_the_title().'</h5>';
			
			$output .='</div>';
			$output .= '</a>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';
		}
       
		
		// Close div wrapper around loop
		

		// Restore data
		wp_reset_postdata();

	}

	// Return your shortcode output
	return $output;

}
add_shortcode( 'myprefix_custom_grid', 'myprefix_custom_grid_shortcode' );

function custom_grid_shortcode( $atts ) {

	// Parse your shortcode settings with it's defaults
	$atts = shortcode_atts( array(
		'posts_per_page' => '-1',
		'term'           => ''
	), $atts, 'myprefix_custom_grid' );

	// Extract shortcode atributes
	extract( $atts );

	// Define output var
	$output = '';

	// Define query
	$query_args = array(
		'post_type'      => 'post', // Change this to the type of post you want to show
		'posts_per_page' => $posts_per_page,
	);

	// Query by term if defined
	if ( $term ) {

		$query_args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field'    => 'ID',
				'terms'    => $term,
			),
		);

	}

	// Query posts
	$custom_query = new WP_Query( $query_args );

	// Add content if we found posts via our query
	if ( $custom_query->have_posts() ) {

		// Open div wrapper around loop
		

		// Loop through posts
		while ( $custom_query->have_posts() ) {

			// Sets up post data so you can use functions like get_the_title(), get_permalink(), etc
			$custom_query->the_post();

			// This is the output for your entry so what you want to do for each post.
			$output .= '<div class="item">';
			$output .= '<div class="blog-content">';
			$output .= '<a href="'.get_permalink().'">';
			$output .= '<div class="hovereffect">';
			
			$output .= get_the_post_thumbnail( $post_id, array( 500, 300 ) );
			$output .='<div class="overlay">';
			$output .='<h5>'.get_the_title().'</h5>';
			
			$output .='</div>';
			$output .= '</a>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';
		}

		// Close div wrapper around loop
		

		// Restore data
		wp_reset_postdata();

	}

	// Return your shortcode output
	return $output;

}
add_shortcode( 'custom_grid_post', 'custom_grid_shortcode' );

function placeholder_author_email_url_form_fields($fields) {
    $replace_author = __('Your Name', 'yourdomain');
    $replace_email = __('Your Email', 'yourdomain');
    $replace_url = __('Your Website', 'yourdomain');
    
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'yourdomain' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="'.$replace_author.'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'yourdomain' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" placeholder="'.$replace_email.'" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Website', 'yourdomain' ) . '</label>' .
    '<input id="url" name="url" type="text" placeholder="'.$replace_url.'" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>';
    
    return $fields;
}
add_filter('comment_form_default_fields','placeholder_author_email_url_form_fields');
function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'yourdomain');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );

add_post_type_support( 'page', 'excerpt' );