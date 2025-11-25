<?php
if (! defined('ABSPATH')) {
    exit;
}

// use hook to change content and menu items...
// change name tab dashboard
function my_project_rename_acc_tabs($items)
{
    $items['dashboard'] = 'dashboard 1';
    return $items;
}
// add_filter('woocommerce_account_menu_items', 'my_project_rename_acc_tabs');

// add content to dashboard
function add_content_to_dashboard()
{

    echo '<p>Hello Thanh Qui</p>';
}
// add_action('woocommerce_account_dashboard', 'add_content_to_dashboard');


function remove_items_menu_download($items)
{
    unset($items['downloads']);

    return $items;
}
add_filter( 'woocommerce_account_menu_items', 'remove_items_menu_download' );
