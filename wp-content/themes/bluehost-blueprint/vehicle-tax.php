<?php

/* 
*   taxonomy
*/
function register_vehicle_tax()
{

    // create brand
    $brand_labels = array(
        'name'          => __('Brands', 'twentytwentyfive'),
        'singular_name' => __('Brand', 'twentytwentyfive'),
    );

    register_taxonomy(
        'vehicle_brand',
        'vehicle',
        array(
            'labels'        => $brand_labels,
            'hierarchical'  => true,
            'rewrite'       => array('slug' => 'brand'),
            'show_in_rest'  => true,
            'show_admin_column' => true,
        )
    );

    // create series
    $series_labels = array(
        'name'          => __('Series', 'twentytwentyfive'),
        'singular_name' => __('Series', 'twentytwentyfive'),
    );

    register_taxonomy(
        'vehicle_series',
        'vehicle',
        array(
            'labels'        => $series_labels,
            'hierarchical'  => true,
            'rewrite'       => array('slug' => 'series'),
            'show_in_rest'  => true,
            'show_admin_column' => true,
        )
    );
}
add_action('init', 'register_vehicle_tax');