<?php
/**
 * Car Dealer Shop functions and definitions
 *
 * @package car_dealer_shop
 * @since 1.0
 */

if ( ! function_exists( 'car_dealer_shop_support' ) ) :
	function car_dealer_shop_support() {

		load_theme_textdomain( 'car-dealer-shop', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('CAR_DEALER_SHOP_BUY_NOW',__('https://www.cretathemes.com/products/car-dealer-wordpress-theme','car-dealer-shop'));
		define('CAR_DEALER_SHOP_PRO_DEMO',__('https://pattern.cretathemes.com/car-dealer-shop/','car-dealer-shop'));
		define('CAR_DEALER_SHOP_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/car-dealer-shop/','car-dealer-shop'));
		define('CAR_DEALER_SHOP_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/car-dealer-shop/','car-dealer-shop'));
		define('CAR_DEALER_SHOP_SUPPORT',__('https://wordpress.org/support/theme/car-dealer-shop/','car-dealer-shop'));
		define('CAR_DEALER_SHOP_REVIEW',__('https://wordpress.org/support/theme/car-dealer-shop/reviews/#new-post','car-dealer-shop'));
		define('CAR_DEALER_SHOP_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','car-dealer-shop'));
		define('CAR_DEALER_SHOP_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','car-dealer-shop'));

	}
endif;

add_action( 'after_setup_theme', 'car_dealer_shop_support' );

if ( ! function_exists( 'car_dealer_shop_styles' ) ) :
	function car_dealer_shop_styles() {
		// Register theme stylesheet.
		$car_dealer_shop_theme_version = wp_get_theme()->get( 'Version' );

		$car_dealer_shop_version_string = is_string( $car_dealer_shop_theme_version ) ? $car_dealer_shop_theme_version : false;
		wp_enqueue_style(
			'car-dealer-shop-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$car_dealer_shop_version_string
		);

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_enqueue_style( 'dashicons' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		wp_enqueue_script( 'car-dealer-shop-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );

		wp_style_add_data( 'car-dealer-shop-style', 'rtl', 'replace' );

		//homepage slider
		wp_enqueue_style('car-dealer-shop-swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), $car_dealer_shop_version_string);

		wp_enqueue_script('car-dealer-shop-swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), $car_dealer_shop_version_string, true);
	}
endif;

add_action( 'wp_enqueue_scripts', 'car_dealer_shop_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_car-dealer-shop') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_cretatestimonial_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=car-dealer-shop-guide-page'),
    ]);
});

add_action('wp_ajax_check_creta_testimonial_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $car_dealer_shop_plugin_file = 'wordclever-ai-content-writer/wordclever.php';

    if (is_plugin_active($car_dealer_shop_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});

add_action('admin_bar_menu', 'your_plugin_adminbar_link', 100);
function your_plugin_adminbar_link($wp_admin_bar) {
    $wp_admin_bar->add_node([
        'id'    => 'yourplugin_upgrade',
        'title' => ' Upgrade to Pro',
        'href'  => 'https://www.cretathemes.com/products/car-dealer-wordpress-theme',
        'meta'  => array(
            'target' => '_blank',
        )
    ]);
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function car_dealer_shop_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'car_dealer_shop_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_car-dealer-shop-guide-page' && $current_screen->base != 'toplevel_page_cretats-theme-showcase' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Car Dealer Shop Theme!', 'car-dealer-shop'); ?></h1>
	        <p><a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button get-start-btn">
				   <?php echo __('Nevigate Getstart', 'car-dealer-shop'); ?>
				</a>
				<script type="text/javascript">
				document.getElementById('install-activate-button').addEventListener('click', function () {
				    const car_dealer_shop_button = this;
				    const car_dealer_shop_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=car-dealer-shop-guide-page")); ?>';
				    // First, check if plugin is already active
				    jQuery.post(ajaxurl, { action: 'check_creta_testimonial_activation' }, function (response) {
				        if (response.success && response.data.active) {
				            // Plugin already active — just redirect
				            window.location.href = car_dealer_shop_redirectUrl;
				        } else {
				            // Show Installing & Activating only if not already active
				            car_dealer_shop_button.textContent = 'Nevigate Getstart';

				            jQuery.post(ajaxurl, {
				                action: 'install_and_activate_creta_testimonial_plugin',
				                nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
				            }, function (response) {
				                if (response.success) {
				                    window.location.href = car_dealer_shop_redirectUrl;
				                } else {
				                    alert('Failed to activate the plugin.');
				                    car_dealer_shop_button.textContent = 'Try Again';
				                }
				            });
				        }
				    });
				});
				</script>

	     
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'car-dealer-shop'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( CAR_DEALER_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'car-dealer-shop'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( CAR_DEALER_SHOP_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'car-dealer-shop'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?car_dealer_shop_admin_notice=1"><?php esc_html_e( 'Dismiss', 'car-dealer-shop' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'car_dealer_shop_admin_notice' );

if( ! function_exists( 'car_dealer_shop_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function car_dealer_shop_update_admin_notice(){
    if ( isset( $_GET['car_dealer_shop_admin_notice'] ) && $_GET['car_dealer_shop_admin_notice'] = '1' ) {
        update_option( 'car_dealer_shop_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'car_dealer_shop_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'car_dealer_shop_getstart_setup_options');
function car_dealer_shop_getstart_setup_options () {
    update_option('car_dealer_shop_admin_notice', FALSE );
}