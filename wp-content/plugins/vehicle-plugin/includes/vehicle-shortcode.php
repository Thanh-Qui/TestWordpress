<?php

function vehicle_list_shortcode() {
    // start buffer
    ob_start();

    $vehicle_list_template = plugin_dir_path(__FILE__) . '../templates/vehicle-list.php';
    if (file_exists($vehicle_list_template)) {
        include $vehicle_list_template;
    }else {
        echo 'No matching file found';
    }
    // get data ad clean buffer
    return ob_get_clean();
}
add_shortcode('vehicle_list', 'vehicle_list_shortcode');

function vehicle_single_shortcode() {
    ob_start();

    $vehicle_single_template = plugin_dir_path(__FILE__) . '../templates/vehicle-single.php';
    if (file_exists($vehicle_single_template)) {
        include $vehicle_single_template;
    } else {
        echo 'No match file found';
    }

    return ob_get_clean();
}
add_shortcode('vehicle_single', 'vehicle_single_shortcode');