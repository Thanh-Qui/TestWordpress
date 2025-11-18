<?php

// get data to url
$search = $_GET['s'] ?? '';

// current page
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// create args to display data
$args = [
    'post_type' => 'vehicle',
    'posts_per_page' => 3,
    'paged' => $paged
];

// build wp_query

// search by name
if (!empty($search)) {
    // clean data input ->sanitize_text_field
    $args['s'] = sanitize_text_field($search);
}


$query = new WP_Query($args);
?>


<!-- search -->
<form method="GET" class="vehicle-filter" style="margin-bottom: 25px;">
    <input class="text-search" type="text" name="s" placeholder="Search vehicle name..." value="<?php echo esc_attr($search); ?>">
    <input type="hidden" name="post_type" value="vehicle">
    <button type="submit">Search</button>
</form>


<?php
// display list vehicle
if ($query->have_posts()) : ?>

    <div class="vehicle-list">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="vehicle-item">

                <!-- Title -->
                <h3><?php the_title(); ?></h3>
                <div class="title">
                    <?php $image_array = get_post_meta(get_the_ID(), '_vehicle_image');
                    $image_id = $image_array[0];
                    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
                    // echo var_dump($image_array);
                    ?>
                    <img class="image-vehicle" src="<?php echo esc_url($image_url); ?>" alt="">
                </div>

                <!-- price -->
                <p>
                    <strong>Price:</strong>
                    <?php
                    // get_post_meta use to read custome field (post_id, meta_key, true)
                    // get_the_ID get current post
                    $price = get_post_meta(get_the_ID(), '_vehicle_price', true);
                    echo $price ? number_format($price) . ' VND' : 'N/A';
                    // echo number_format($price);
                    ?>
                </p>

                <!-- color -->
                <p>
                    <?php
                    // get_post_meta use to read custome field (post_id, meta_key, true)
                    // get_the_ID get current post
                    $color = get_post_meta(get_the_ID(), '_vehicle_color', true);
                    // echo $color;
                    ?>
                    <strong>Color: <span style="color: <?php echo $color ?>">■</span></strong>

                </p>

                <!-- brand -->
                <p>
                    <strong>Brand:</strong>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'vehicle_brand');
                    echo $terms ? esc_html($terms[0]->name) : 'N/A';
                    ?>
                </p>

                <!-- series -->
                <p>
                    <strong>Series:</strong>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'vehicle_series');
                    echo $terms ? esc_html($terms[0]->name) : 'N/A';
                    ?>
                </p>

                <!-- LINK (OPTIONAL) -->
                <a href="<?php the_permalink(); ?>">View Details</a>

            </div>

        <?php endwhile; ?>
    </div>

<?php else : ?>

    <p>Không tìm thấy vehicle nào phù hợp.</p>

<?php endif; ?>

<!-- Pagination -->
<div class="pagination-list-vehicle">
    <?php
    echo paginate_links([
        'total' => $query->max_num_pages,
        'current' => $paged,
    ])
    ?>
</div>