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
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-car',
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'rewrite'            => array('slug' => 'vehicle'),
    );

    register_post_type('vehicle', $args);
}

// hook init --> dùng đăng ký cpt, taxonomy
add_action('init', 'register_vehicle_cpt');


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
        )
    );
}
add_action('init', 'register_vehicle_tax');

/* 
*   custom fields
*/
// add new fields for specific posts
function vehicle_add_meta()
{
    add_meta_box(
        // id của vehicle cụ thể
        'vehicle_info',
        // tên hiển thị của vehicle đó
        'Vehicle Info',
        // tạo hàm nơi nhập dữ liệu vehicel
        'vehicle_meta_box_html',
        'vehicle'
    );
}
add_action('add_meta_boxes', 'vehicle_add_meta');

// render meta box
function vehicle_meta_box_html($post)
{
    $year = get_post_meta($post->ID, '_vehicle_year', true);
    $price = get_post_meta($post->ID, '_vehicle_price', true);
?>
    <div>
        <div>
            <label>Năm sản xuất:</label><br>
            <input type="number" name="vehicle_year" value="<?php echo $year; ?>">
        </div>
        <div style="margin-top: 10px;">
            <label>Giá:</label><br>
            <input type="number" name="vehicle_price" value="<?php echo $price; ?>">
        </div>
    </div>
<?php
}

// save meta
function vehicle_save_meta($post_id)
{
    if (isset($_POST['vehicle_year']) && isset($_POST['vehicle_price'])) {
        update_post_meta($post_id, '_vehicle_year', $_POST['vehicle_year']);
        update_post_meta($post_id, '_vehicle_price', $_POST['vehicle_price']);
    }
}
add_action('save_post', 'vehicle_save_meta');
