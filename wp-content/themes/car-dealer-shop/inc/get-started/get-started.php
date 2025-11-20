<?php
add_action( 'admin_menu', 'car_dealer_shop_getting_started' );
function car_dealer_shop_getting_started() {
	add_theme_page( esc_html__('Get Started', 'car-dealer-shop'), esc_html__('Get Started', 'car-dealer-shop'), 'edit_theme_options', 'car-dealer-shop-guide-page', 'car_dealer_shop_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function car_dealer_shop_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
   
}
add_action('admin_enqueue_scripts', 'car_dealer_shop_admin_theme_style');

//guidline for about theme
function car_dealer_shop_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'car-dealer-shop' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'car-dealer-shop'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( CAR_DEALER_SHOP_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'car-dealer-shop'); ?></a>
						<a href="<?php echo esc_url( CAR_DEALER_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'car-dealer-shop'); ?></a>
						<a href="<?php echo esc_url( CAR_DEALER_SHOP_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'car-dealer-shop'); ?></a>
						<a href="<?php echo esc_url( CAR_DEALER_SHOP_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'car-dealer-shop'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'car-dealer-shop'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'car-dealer-shop'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'car-dealer-shop'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'car-dealer-shop'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'car-dealer-shop'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( CAR_DEALER_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'car-dealer-shop'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'car-dealer-shop'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'car-dealer-shop'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( CAR_DEALER_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'car-dealer-shop'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'car-dealer-shop'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'car-dealer-shop');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'car-dealer-shop');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'car-dealer-shop');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'car-dealer-shop');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'car-dealer-shop');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'car-dealer-shop'); ?></h4>
					<p><?php esc_html_e('60+ Premium WordPress Themes', 'car-dealer-shop'); ?></p>
					<p class="main-bundle-price" ><strong class="cancel-bundle-price"><?php esc_html_e('$2340', 'car-dealer-shop'); ?></strong><span class="bundle-price"><?php esc_html_e('$86', 'car-dealer-shop'); ?></span></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'car-dealer-shop'); ?><strong><?php esc_html_e('Extra 20%', 'car-dealer-shop'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'car-dealer-shop'); ?><strong><?php esc_html_e('“HEAT20”', 'car-dealer-shop'); ?></strong></p>
					<a href="<?php echo esc_url( CAR_DEALER_SHOP_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For ', 'car-dealer-shop'); ?><span><?php esc_html_e('$86', 'car-dealer-shop'); ?></span></a>
				</div>
				<div class="pro-boxes pro-theme-container">
					<h4><?php esc_html_e('Car Dealer Shop Pro', 'car-dealer-shop'); ?></h4>
					<p class="pro-theme-price" ><?php esc_html_e('$39', 'car-dealer-shop'); ?></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'car-dealer-shop'); ?><strong><?php esc_html_e('Extra 25%', 'car-dealer-shop'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'car-dealer-shop'); ?><strong><?php esc_html_e('“SUMMER25”', 'car-dealer-shop'); ?></strong></p>
					<a href="<?php echo esc_url( CAR_DEALER_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro At Just at $29.25', 'car-dealer-shop'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'car-dealer-shop'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( CAR_DEALER_SHOP_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'car-dealer-shop'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>