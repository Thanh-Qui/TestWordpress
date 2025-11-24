<?php

// Add file css
function add_my_css() {
    wp_enqueue_style(
        'vehicle-plugin-style',
        plugin_dir_url(__FILE__) . '../assets/css/style.css',
        array(),
        null,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'add_my_css');
