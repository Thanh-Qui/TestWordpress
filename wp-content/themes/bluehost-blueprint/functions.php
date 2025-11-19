<?php

/**
 * Bluehost Blueprint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

// Include the autoloader.
require_once get_template_directory() . '/inc/autoloader.php';

// Initialize theme assets.
Bluehost\Blueprint\Assets::init();

// Initialize theme back-compat class.
Bluehost\Blueprint\Back_Compat::init();

// Initialize the version control system.
Bluehost\Blueprint\Version::init();


require('vehicle-cpt.php');
require('vehicle-func.php');
require('vehicle-tax.php');
require('vehicle-meta-box.php');

// create shortcode for list vehicle
function vehicle_list_shortcode()
{
    // start buffer
    ob_start();
    // load file template and inclue file
    get_template_part('template-parts/vehicle', 'list');
    // get all content and remove buffer
    return ob_get_clean();
}
// register new shortcode (add_shortcode), vehice_list -> name shortcode, vehicle_list_shortcode -> func callback
add_shortcode('vehicle_list', 'vehicle_list_shortcode');

// create shortcode for single vehicle
function vehicle_single_shortcode() {
    ob_start();
    get_template_part('template-parts/vehicle', 'single');

    return ob_get_clean();
}
add_shortcode('vehicle_single', 'vehicle_single_shortcode');

// load custom file css
function my_custom_styles()
{
    // register and load file css
    wp_enqueue_style(
        'custom-style',
        // get url of file css
        get_template_directory_uri() . '/custom-css/style.css', // url css
        array(),
        // get all version
        'all',
    );
}
// wp_enqueue_scripts (hook) register and enquene file css and js
add_action('wp_enqueue_scripts', 'my_custom_styles');