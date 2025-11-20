<?php
/**
 * Block Patterns
 *
 * @package car_dealer_shop
 * @since 1.0
 */

function car_dealer_shop_register_block_patterns() {
	$car_dealer_shop_block_pattern_categories = array(
		'car-dealer-shop' => array( 'label' => esc_html__( 'Car Dealer Shop', 'car-dealer-shop' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'car-dealer-shop' ) ),
	);

	$car_dealer_shop_block_pattern_categories = apply_filters( 'car_dealer_shop_car_dealer_shop_block_pattern_categories', $car_dealer_shop_block_pattern_categories );

	foreach ( $car_dealer_shop_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'car_dealer_shop_register_block_patterns', 9 );