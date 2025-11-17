<?php

function create_post_type()
{
    $couponlabels = array(
        // menu custom post type
        'name' => _x('Coupon', 'Mã giảm giá'),
        'singular_name' => _x('Coupon', 'Mã giảm giá'),
        'add_new' => __('Add coupon'),
        'add_new_item' => __('Add new coupon'),
        'edit_item' => __('Update coupon'),
        'new_item' => __('Add new coupon'),
        'all_items' => __('All coupon'),
        'view_item' => __('View coupon'),
        'search_item' => __('Search coupon'),
        'not_found' => __('Hiện tại chưa có coupon nào'),
        'not_found_in_trash' => __('Không có coupon nào trong sọt rác'),
        'menu_name' => 'Coupon'
    );

    $args = array(
        'labels' => $couponlabels,
        'description' => 'Quản lý các mã giảm giá trên blog',

        // cho phép hiển thị menu trong wordpress Dashboard
        'public' => true,
        'menu_position' => 4,
        'has_archive' => true,

        // Xác định chức năng hỗ trợ trong custome post type
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
    );

    register_post_type('coupon_code', $args);
}

add_action('init', 'create_post_type');

// update notification
function my_updated_messages($messages)
{
    global $post, $post_id;
    $messages = array(
        0 => '',
        1 => sprintf(__('Coupon đã được cập nhật. <a href="%s">Xem coupon</a>'), esc_url(get_permalink($post_id))),
        2 => __('Custom field updated.'),
        3 => __('Custom field deleted.'),
        4 => __('Product updated.'),
        5 => isset($_GET) ? sprintf(__('Coupon đã được khôi phục bản lưu từ %s'), wp_post_revision_title((int) $_GET, false)) : false,
        6 => sprintf(__('Coupon đã được đăng. <a href="%s">Xem coupon</a>'), esc_url(get_permalink($post_id))),
        7 => __('Coupon đã được lưu.'),
        8 => sprintf(__('Coupon đã được gửi đi. <a target="_blank" href="%s">Xem coupon</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_id)))),
        9 => sprintf(__('Bài viết đã được hẹn giờ: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Xem bài viết</a>'), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_id))),
        10 => sprintf(__('Coupon đã được lưu nháp. <a target="_blank" href="%s">Xem coupon</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_id)))),
    );
    return $messages;
}
add_filter('post_updated_messages', 'my_updated_messages');
