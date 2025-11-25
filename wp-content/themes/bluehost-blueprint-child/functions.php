<?php

function bluehostblueprint_child_style() {
    // load parent style
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // load child style
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
add_action(' wp_enqueue_scripts', 'bluehostblueprint_child_style');

function add_style_css() {
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . './my-css/style.css');
}
add_action('wp_enqueue_scripts', 'add_style_css');

require_once get_theme_file_path( 'woocommerce/custom-my-account.php' );