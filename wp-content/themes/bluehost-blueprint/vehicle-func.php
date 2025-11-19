<?php

// Add column filter (brand, series)
function vehicle_filter_dropdown() {

    // create array contain taxonomy
    $taxonomies = ['vehicle_brand', 'vehicle_series'];
    
    // get a taxonomy for loop
    foreach ($taxonomies as $tax) {
        // get_terms get list taxonomy
        $terms = get_terms(['taxonomy' => $tax, 'hide_empty' => false]);
        
        // get current value to URL. example: ?vehicle_brand=toyota
        $current = isset($_GET[$tax]) ? $_GET[$tax] : '';

        // display All brand or all series
        $taxonomy_labels = $tax === 'vehicle_brand' ? 'Brand' : 'Series';
       
        // display select
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
// hook (restrict_manage_posts) add custom filter in admin page list
add_action('restrict_manage_posts', 'vehicle_filter_dropdown');
