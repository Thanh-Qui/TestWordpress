<?php
/**
 * Block Filters
 *
 * @package car_dealer_shop
 * @since 1.0
 */

function car_dealer_shop_block_wrapper( $car_dealer_shop_block_content, $car_dealer_shop_block ) {

	if ( 'core/button' === $car_dealer_shop_block['blockName'] ) {
		
		if( isset( $car_dealer_shop_block['attrs']['className'] ) && strpos( $car_dealer_shop_block['attrs']['className'], 'has-arrow' ) ) {
			$car_dealer_shop_block_content = str_replace( '</a>', car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $car_dealer_shop_block_content );
			return $car_dealer_shop_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $car_dealer_shop_block['blockName'] ) {
			if( 'post_tag' === $car_dealer_shop_block['attrs']['term'] ) {
				$car_dealer_shop_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $car_dealer_shop_block_content );
			}

			if( 'category' ===  $car_dealer_shop_block['attrs']['term'] ) {
				$car_dealer_shop_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $car_dealer_shop_block_content );
			}
			return $car_dealer_shop_block_content;
		}
		if ( 'core/post-date' === $car_dealer_shop_block['blockName'] ) {
			$car_dealer_shop_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $car_dealer_shop_block_content );
			return $car_dealer_shop_block_content;
		}
		if ( 'core/post-author' === $car_dealer_shop_block['blockName'] ) {
			$car_dealer_shop_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $car_dealer_shop_block_content );
			return $car_dealer_shop_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $car_dealer_shop_block['blockName'] ) {
			if( isset( $car_dealer_shop_block['attrs']['type'] ) && 'previous' === $car_dealer_shop_block['attrs']['type'] ) {
				$car_dealer_shop_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $car_dealer_shop_block_content );
			}
			else {
				$car_dealer_shop_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . car_dealer_shop_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $car_dealer_shop_block_content );
			}
			return $car_dealer_shop_block_content;
		}
		if ( 'core/post-date' === $car_dealer_shop_block['blockName'] ) {
            $car_dealer_shop_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . car_dealer_shop_get_svg( array( 'icon' => 'calendar' ) ), $car_dealer_shop_block_content );
            return $car_dealer_shop_block_content;
        }
		if ( 'core/post-author' === $car_dealer_shop_block['blockName'] ) {
            $car_dealer_shop_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . car_dealer_shop_get_svg( array( 'icon' => 'user' ) ), $car_dealer_shop_block_content );
            return $car_dealer_shop_block_content;
        }

	}
    return $car_dealer_shop_block_content;
}
	
add_filter( 'render_block', 'car_dealer_shop_block_wrapper', 10, 2 );
