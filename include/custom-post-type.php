<?php

function services_custom_post(){

    $services_label = array(
        'name'          => __('Services Post','textdomain'),
        'singular_name' => __('Services Post','textdomain'),
        'add_new'       => __('Add Services Post','textdomain'),
        'add_new_item'  => __('Add New Services Post','textdomain'),
        'edit_item'  => __('Edit Services Post','textdomain'),
        'All_item'  => __('Services Post','textdomain')
    );
    $services_args = array(
        'labels'  => $services_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('services', $services_args);

    $latest_label = array(
        'name'          => __('Latest Trend Post','textdomain'),
        'singular_name' => __('Latest Trend Post','textdomain'),
        'add_new'       => __('Add Latest Trend Post','textdomain'),
        'add_new_item'  => __('Add New Latest Trend Post','textdomain'),
        'edit_item'  => __('Edit Latest Trend Post','textdomain'),
        'All_item'  => __('Latest Trend Post','textdomain')
    );
    $latest_args = array(
        'labels'  => $latest_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('latest', $latest_args);

    $About_label = array(
        'name'          => __('About Me Trend Post','textdomain'),
        'singular_name' => __('About Me Trend Post','textdomain'),
        'add_new'       => __('Add About Me Trend Post','textdomain'),
        'add_new_item'  => __('Add New About Me Trend Post','textdomain'),
        'edit_item'  => __('Edit About Me Trend Post','textdomain'),
        'All_item'  => __('About Me Trend Post','textdomain')
    );
    $About_args = array(
        'labels'  => $About_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('About', $About_args);

    
}
add_action('init', 'services_custom_post');
