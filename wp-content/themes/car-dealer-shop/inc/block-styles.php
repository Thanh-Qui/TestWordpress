<?php
/**
 * Block Styles
 *
 * @package car_dealer_shop
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function car_dealer_shop_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'car-dealer-shop-padding-0',
				'label' => esc_html__( 'No Padding', 'car-dealer-shop' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'car-dealer-shop-post-author-card',
				'label' => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'car-dealer-shop-button',
				'label'        => esc_html__( 'Plain', 'car-dealer-shop' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'car-dealer-shop-post-comments',
				'label'        => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'car-dealer-shop-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'car-dealer-shop-wp-table',
				'label'        => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'car-dealer-shop-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'car-dealer-shop-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'car-dealer-shop' ),
			)
		);
	}
	add_action( 'init', 'car_dealer_shop_register_block_styles' );
}
