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
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menu'  => true,
            'show_in_admin_bar' => true,
            'show_in_rest'      => true,
            'menu_position'     => 3,
            'menu_icon'         => 'dashicons-analytics',
            'supports'          => array('title', 'editor', 'revisions', 'ecerpt', 'thumbnail', 'custom-fields', 'post-formats'),
            'has_archive'       => true,
        );
        register_post_type('case_study', $args);
    }
}
register_casestudy();