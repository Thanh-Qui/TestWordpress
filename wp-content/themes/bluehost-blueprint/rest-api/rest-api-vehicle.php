<?php

// register api search
// WP_REST_Request contain query params, headers, body
function vehicle_search_api(WP_REST_Request $request)
{

    //get param to url
    $keyword = sanitize_text_field($request->get_param('search'));

    // select custom post type
    $args = [
        'post_type'      => 'vehicle',
        'posts_per_page' => -1,
        's'              => $keyword,
    ];

    // init wp_query
    $query = new WP_Query($args);

    // create array contain data
    $results = [];

    if ($query->have_posts()) {
        while ($query->have_posts()) {

            $query->the_post();

            // return data
            $results[] = [
                'id'       => get_the_ID(),
                'title'    => get_the_title(),
                'content'  => get_the_excerpt(),
            ];
        }
        wp_reset_postdata();
    }

    // return value: param:search, count, data
    return rest_ensure_response([
        'search' => $keyword,
        'total'   => count($results),
        'data'    => $results,
    ]);
}


// register api filter by brand or series
function vehicle_filter_api(WP_REST_Request $request)
{
    // get param
    $brand = $request->get_param('brand');
    $series = $request->get_param('series');

    $args = [
        'post_type' => 'vehicle',
        'posts_per_page' => 6,
    ];

    // add info taxonomy brand
    if (!empty($brand)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'vehicle_brand',
                'field' => 'slug',
                'terms' => $brand,
            ]
        ];
    }

    // add info taxonomy series
    if (!empty($series)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'vehicle_series',
                'field' => 'slug',
                'terms' => $series,
            ]
        ];
    }

    // init query
    $query = new WP_Query($args);
    // create array contain data
    $results = [];
    // check exists data
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $results[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'content' => get_the_excerpt(),
            ];
        }
        wp_reset_postdata();
    }

    return rest_ensure_response([
        'brand' => $brand,
        'series' => $series,
        'total' => count($results),
        'data' => $results,
    ]);
}

add_action('rest_api_init', function () {
    register_rest_route('vehicle/v1', '/brand', [
        'methods' => 'GET',
        'callback' => 'vehicle_filter_api',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('vehicle/v1', '/search', [
        'methods' => 'GET',
        'callback' => 'vehicle_search_api',
        'permission_callback' => '__return_true',
    ]);
    
});
