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
// require('page-customer.php');

// create shortcode for list vehicle
function vehicle_list_shortcode()
{
    ob_start();
    get_template_part('template-parts/vehicle', 'list');
    return ob_get_clean();
}
add_shortcode('vehicle_list', 'vehicle_list_shortcode');

// add file css
function my_custom_styles()
{
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/custom-css/style.css', // url css
        array(),
        'all',
    );
}
add_action('wp_enqueue_scripts', 'my_custom_styles');
