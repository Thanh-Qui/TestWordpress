<?php

/* 
*   custom post type
*/
function register_vehicle_cpt()
{

    $labels = array(
        'name'               => __('Vehicles', 'twentytwentyfive'),
        'singular_name'      => __('Vehicle', 'twentytwentyfive'),
        'menu_name'          => __('Vehicles', 'twentytwentyfive'),
        'all_items'          => __('All Vehicles', 'twentytwentyfive'),
        'add_new'            => __('Add New', 'twentytwentyfive'),
        'add_new_item'       => __('Add New Vehicle', 'twentytwentyfive'),
        'edit_item'          => __('Edit Vehicle', 'twentytwentyfive'),
        'new_item'           => __('New Vehicle', 'twentytwentyfive'),
        'view_item'          => __('View Vehicle', 'twentytwentyfive'),
    );

    $args = array(
        'label'              => __('Vehicles', 'twentytwentyfive'),
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-car',
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'rewrite'            => array('slug' => 'vehicle'),
        'exclude_from_search' => false, 
    );

    register_post_type('vehicle', $args);
}

// hook init --> dùng đăng ký cpt, taxonomy
add_action('init', 'register_vehicle_cpt');