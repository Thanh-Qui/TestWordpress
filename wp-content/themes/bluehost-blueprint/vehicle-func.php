<?php

// thực hiện thêm cột vào All Vehicle
function vehicle_filter_dropdown() {

    // tạo mảng chứa các taxonomy
    $taxonomies = ['vehicle_brand', 'vehicle_series'];
    
    // lặp vào mảng lấy từng taxonomy
    foreach ($taxonomies as $tax) {
        $terms = get_terms(['taxonomy' => $tax, 'hide_empty' => false]);
        
        $current = isset($_GET[$tax]) ? $_GET[$tax] : '';

        $taxonomy_labels = $tax === 'vehicle_brand' ? 'Brand' : 'Series';
       
        // hiển thị select cần chọn
        echo '<select name="'.esc_attr($tax).'">';
        echo '<option value="">All '.esc_html($taxonomy_labels).'</option>';

        foreach ($terms as $term) {
            printf(
                '<option value="%s"%s>%s</option>',
                esc_attr($term->slug),
                selected($current, $term->slug, false),
                esc_html($term->name)
            );
        }
        echo '</select>';
    }
}
add_action('restrict_manage_posts', 'vehicle_filter_dropdown');
