<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
{
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }

        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
{
        wp_dequeue_style('bootstrap');
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('bootstrap', 'fontawesome', 'slick', 'slick-theme', 'header-animate', 'lightbox'), rand(111, 9999));
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);



require get_stylesheet_directory() . '/inc/wp-bootstrap-navwalker.php';

if (!function_exists('successkit_setup')):
    function successkit_setup()
{

        add_theme_support('editor-styles');
        add_theme_support('responsive-embeds');

    }

endif;

// END ENQUEUE PARENT ACTION

//  Add a new custom grid shortcode module
// Usage [myprefix_custom_grid posts_per_page="4" term="4"]
// You can also go to Visual Composer > Shortcode Mapper to add your custom module
function myprefix_custom_grid_shortcode($atts)
{

    // Parse your shortcode settings with it's defaults
    $atts = shortcode_atts(array(
        'posts_per_page' => '-1',
        'term'           => '',
    ), $atts, 'myprefix_custom_grid');

    // Extract shortcode atributes
    extract($atts);

    // Define output var
    $output = '';

    // Define query
    $query_args = array(
        'post_type'      => 'post', // Change this to the type of post you want to show
        'posts_per_page' => $posts_per_page,
    );

    // Query by term if defined
    if ($term) {

        $query_args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'ID',
                'terms'    => $term,
            ),
        );

    }

    // Query posts
    $custom_query = new WP_Query($query_args);

    // Add content if we found posts via our query
    if ($custom_query->have_posts()) {

        // Open div wrapper around loop

        // Loop through posts
        while ($custom_query->have_posts()) {

            // Sets up post data so you can use functions like get_the_title(), get_permalink(), etc
            $custom_query->the_post();

            // This is the output for your entry so what you want to do for each post.
            $output .= '<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="moreBox">';
            $output .= '<div class="blog-content">';
            $output .= '<a href="' . get_permalink() . '">';
            $output .= '<div class="hovereffect">';

            $output .= '<img class="img-responsive" src="http://websitedemoonline.com/successkit/wp-content/uploads/2020/02/Untitled-1.jpg" alt="">';
            $output .= '<div class="overlay">';
            $output .= '<h5>' . get_the_title() . '</h5>';

            $output .= '</div>';
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
add_shortcode('myprefix_custom_grid', 'myprefix_custom_grid_shortcode');

function custom_grid_shortcode($atts)
{

    // Parse your shortcode settings with it's defaults
    $atts = shortcode_atts(array(
        'posts_per_page' => '-1',
        'term'           => '',
    ), $atts, 'myprefix_custom_grid');

    // Extract shortcode atributes
    extract($atts);

    // Define output var
    $output = '';

    // Define query
    $query_args = array(
        'post_type'      => 'post', // Change this to the type of post you want to show
        'posts_per_page' => $posts_per_page,
    );

    // Query by term if defined
    if ($term) {

        $query_args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'ID',
                'terms'    => $term,
            ),
        );

    }

    // Query posts
    $custom_query = new WP_Query($query_args);

    // Add content if we found posts via our query
    if ($custom_query->have_posts()) {

        // Open div wrapper around loop
        
        // Loop through posts
        while ($custom_query->have_posts()) {
            
            // Sets up post data so you can use functions like get_the_title(), get_permalink(), etc
            $custom_query->the_post();

            if (has_post_thumbnail()) {
                $img_url = get_the_post_thumbnail_url(get_the_id(), array(400, 200));
            } else {
                $img_url = $wp_upload_dir . '/default-img.jpg';
            }

            // This is the output for your entry so what you want to do for each post.
            $output .= '<a href="' . get_permalink() . '">';
            $output .= '<div class="post">';
            $output .= '<div class="card">';
            $output .= '<div class="embed-responsive embed-responsive-4by3">';
            // $output .= get_the_post_thumbnail($post_id, array(400, 200), array('class' => 'card-post-img card-img-top embed-responsive-item'));
            $output .= '<img src="' . $img_url . '" class="card-post-img card-img-top embed-responsive-item" />';
            $output .= '</div>';
            $output .= '<div class="card-body px-3 mt-3 pb-3 d-flex flex-column">';
            $output .= '<span class="card-eyebrow sans-serif">' . get_the_category()[0]->cat_name . '</span>';
            $output .= '<h5 class="card-title h5 sans-serif">' . get_the_title() . '</h5>';
            $output .= '<p class="card-text sans-serif">' . get_the_excerpt() . '</p>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</a>';
        }

        // Close div wrapper around loop

        // Restore data
        wp_reset_postdata();

    }

    // Return your shortcode output
    return $output;

}
add_shortcode('custom_grid_post', 'custom_grid_shortcode');

function placeholder_author_email_url_form_fields($fields)
{
    $replace_author = __('Your Name', 'yourdomain');
    $replace_email  = __('Your Email', 'yourdomain');
    $replace_url    = __('Your Website', 'yourdomain');

    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __('Name', 'yourdomain') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
    '<input id="author" name="author" type="text" placeholder="' . $replace_author . '" value="' . esc_attr($commenter['comment_author']) . '" size="20"' . $aria_req . ' /></p>';

    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __('Email', 'yourdomain') . '</label> ' .
    ($req ? '<span class="required">*</span>' : '') .
    '<input id="email" name="email" type="text" placeholder="' . $replace_email . '" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' /></p>';

    $fields['url'] = '<p class="comment-form-url"><label for="url">' . __('Website', 'yourdomain') . '</label>' .
    '<input id="url" name="url" type="text" placeholder="' . $replace_url . '" value="' . esc_attr($commenter['comment_author_url']) .
        '" size="30" /></p>';

    return $fields;
}
add_filter('comment_form_default_fields', 'placeholder_author_email_url_form_fields');
function placeholder_comment_form_field($fields)
{
    $replace_comment = __('Your Comment', 'yourdomain');

    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="' . $replace_comment . '" aria-required="true"></textarea></p>';

    $fields['label_submit'] = 'Post comment';

    return $fields;
}
add_filter('comment_form_defaults', 'placeholder_comment_form_field');

add_post_type_support('page', 'excerpt');

// function japanworm_shorten_title($title)
// {
//     $newTitle = substr($title, 0, 28); // Only take the first 20 characters

//     return $newTitle . " &hellip;"; // Append the elipsis to the text (...)
// }
// add_filter('the_title', 'japanworm_shorten_title', 10, 1);

function prefix_category_title($title)
{
    if (is_category() || is_tax()) {
        $title = trim(single_cat_title('', false));
    }

    return $title;
}
add_filter('get_the_archive_title', 'prefix_category_title');

function my_search_form($form)
{ 
    $form = '
		<form role="search" method="get" id="searchform" class="search-form" action="' . home_url('/') . '" >
			<div class="input-group">
				<div class="input-group-prepend">
            		<button class="btn btn-outline-secondary search-button" type="submit"  value="' . esc_attr__('Search') . '" ></button>
        		</div>
				<label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    			<input class="search-field" type="text" placeholder="Search for blog posts" value="' . get_search_query() . '" name="s" id="s" />
    		</div>
		</form>';

    return $form;
}

add_filter('get_search_form', 'my_search_form', 100);

include_once 'inc/breadcrumbs.php';
include_once 'inc/cpt.php';

function wpdocs_custom_excerpt_length($length)
{
    return 12;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


add_action('wp_enqueue_scripts', 'remove_my_action');
function remove_my_action(){
    remove_action('wp_enqueue_scripts', 'educational_scripts');
}

if (!function_exists('successkit_scripts')):
    function successkit_scripts(){
        global $wp_query; 

        $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 9;
        $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
        $offset = (isset($_POST['offset'])) ? $_POST['offset'] : 9;
        $tax = (isset($_POST['tax'])) || $_POST['tax'] !== 'undefined' ? $_POST['tax'] : 'all';
        $term = (isset($_POST['term']))  || $_POST['tax'] !== 'undefined' ? $_POST['term'] : 'all';
    
        $termArray = $term !== 'all' ? array(
            'taxonomy'       => $tax,
            'field'    => 'term_id',
            'terms'    => $term,
        ) : '';
    
        $args = array(
            'suppress_filters' => true,
            'no_found_rows' => true,
            'post_type' => 'case_study',
            'posts_per_page' => $ppp,
            'offset' => $offset,
            'page' => $page,
            'tax_query'      => array(
                $termArray
            ),
            'orderby'        => array('menu_order' => 'ASC', 'post_date' => "DESC"),
            'meta_query'	=> array(
                'relation'		=> 'OR',
                array(
                    'key'	 	=> 'pdf_upload',
                    'value'	  	=> array(''),
                    'compare' 	=> 'NOT IN',
                ),
                array(
                    'key'	 	=> 'video_link',
                    'value'	  	=> array(''),
                    'compare' 	=> 'NOT IN',
                ),
            ),
        );
        $published_posts = wp_count_posts('case_study')->publish;
        if(is_archive()){
            $max = $wp_query->max_num_pages;
        }else{
            $max = floor($published_posts / $ppp);
        }
        
        wp_deregister_script('iso-jquery');
        wp_dequeue_script( 'iso-jquery');
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
        wp_enqueue_script('jquery');
        wp_dequeue_script( 'bootstrap' );
        wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' );

        wp_register_script('scriptjs', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/script.js', array('jquery'));

        wp_localize_script( 'scriptjs', 'ajax_posts', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'noposts' => __('No older posts found', 'sk'),
            'max_page' => $max
        ));	
        
        wp_enqueue_script('scriptjs');
        wp_reset_query();
    }
endif;
add_action('wp_enqueue_scripts', 'successkit_scripts', 10);


function more_post_ajax(){
    global $wp_query;

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 9;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $offset = (isset($_POST['offset'])) ? $_POST['offset'] : 9;


    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'no_found_rows' => true,
        'post_type' => 'case_study',
        'posts_per_page' => $ppp,
        'offset' => $offset,
        'orderby'        => array('menu_order' => 'ASC', 'post_date' => "DESC"),
        'meta_query'	=> array(
            'relation'		=> 'OR',
            array(
                'key'	 	=> 'pdf_upload',
                'value'	  	=> array(''),
                'compare' 	=> 'NOT IN',
            ),
            array(
                'key'	 	=> 'video_link',
                'value'	  	=> array(''),
                'compare' 	=> 'NOT IN',
            ),
        ),
    );

    // $loop = new WP_Query($args);
    query_posts( $args );


    if (have_posts()) :  while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'case_study-archive');
    endwhile;
    endif;
    wp_reset_query();
    
    die;
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');