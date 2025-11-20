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