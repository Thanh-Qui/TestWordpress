<?php

// create args to display data
$args = [
    'post_type' => 'vehicle',
    'post_per_page' => 10,
    'paged' => $paged
];

$query = new WP_Query($args);

