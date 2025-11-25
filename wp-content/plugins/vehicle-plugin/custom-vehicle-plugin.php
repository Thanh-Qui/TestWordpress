<?php
/**
 * Plugin Name: Custome vehicle plugin
 * Description: A custom plugin for managing vehicle listings.
 * Version: 1.0.0
 * Author: Thanh-Qui
 * Author URI: http://project1.test:8080/
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

require_once plugin_dir_path(__FILE__) . 'includes/vehicle-cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/vehicle-ext.php';
require_once plugin_dir_path(__FILE__) . 'includes/vehicle-shortcode.php';
require_once plugin_dir_path(__FILE__) . 'includes/vehicle-meta-box.php';
require_once plugin_dir_path(__FILE__) . 'includes/vehicle-rest-api.php';