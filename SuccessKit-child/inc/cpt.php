<?php
/**
 *    custom post types
 */

if (!function_exists('register_case_study')) {
    function register_casestudy()
    {
        $labels = array(
            'name'          => __('Case Studies'),
            'singular_name' => __('Case Study'),
        );
        $args = array(
            'labels'            => $labels,
            'description'       => __('Client Case Study post types.'),
            'public'            => true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menu'  => true,
            'show_in_admin_bar' => true,
            'show_in_rest'      => true,
            'menu_position'     => 3,
            'menu_icon'         => 'dashicons-analytics',
            'supports'          => array('title', 'editor', 'revisions', 'excerpt', 'thumbnail', 'custom-fields', 'post-formats', 'page-attributes'),
            'has_archive'       => true,
        );
        register_post_type('case_study', $args);
    }
}
// register_casestudy();
add_action('init', 'register_casestudy', 0);

if (!function_exists('register_casestudy_tax')) {
    function register_casestudy_tax()
    {
        $industry_labels = array(
            'name'          => _x('Industry Types', 'tax general name', 'sk'),
            'singular_name' => _x('Industry Type', 'tax singular name', 'sk'),
        );
        $industry_args = array(
            'labels'            => $industry_labels,
            'description'       => __('Describes which industry the case study is in.'),
            'hierarchical'      => true,
            'public'            => true,
            'show_in_rest'      => true,
            'show_in_nav_menus' => true,
        );
        register_taxonomy('industry_type', 'case_study', $industry_args);

        $subject_labels = array(
            'name'          => _x('Subjects', 'tax general name', 'sk'),
            'singular_name' => _x('Subject', 'tax singular name', 'sk'),
        );
        $subject_args = array(
            'labels'            => $subject_labels,
            'description'       => __('Describes which general subject the case study is.'),
            'hierarchical'      => true,
            'public'            => true,
            'show_in_rest'      => true,
            'show_in_nav_menus' => true,
        );
        register_taxonomy('subject', 'case_study', $subject_args);

        $content_labels = array(
            'name'          => _x('Content Types', 'tax general name', 'sk'),
            'singular_name' => _x('Content Type', 'tax singular name', 'sk'),
        );
        $content_args = array(
            'labels'            => $content_labels,
            'description'       => __('Content type of case study. Video/PDF/etc..', 'sk'),
            'hierarchical'      => true,
            'public'            => true,
            'show_in_rest'      => true,
            'show_in_nav_menus' => true,
        );
        register_taxonomy('content_type', 'case_study', $content_args);
    }
}
// register_casestudy_tax();
add_action('init', 'register_casestudy_tax', 0);