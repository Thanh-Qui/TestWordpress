<?php

/**
 * Title: Featured Section
 * Slug: car-dealer-shop/featured-section
 */

?>

<!-- wp:group {"className":" wp-block-section car-sec alignfull","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wp-block-section car-sec alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px"><!-- wp:group {"className":"sec-header-box","layout":{"type":"default"}} -->
<div class="wp-block-group sec-header-box"><!-- wp:group {"className":"sec-header-box-inner","layout":{"type":"default"}} -->
<div class="wp-block-group sec-header-box-inner"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"oxanium"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color has-oxanium-font-family" style="margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('Cars','car-dealer-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Featured','car-dealer-shop'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"car-cols","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns car-cols" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"main-box wow fadeInLeft","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group main-box wow fadeInLeft has-base-background-color has-background" style="border-radius:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":94,"sizeSlug":"full","linkDestination":"none","align":"center","className":"car-img"} -->
<figure class="wp-block-image aligncenter size-full car-img"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/car1.png' ); ?>" alt="" class="wp-image-94"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"car-name-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-name-box"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}}} -->
<h5 class="wp-block-heading" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('Velozar GT','car-dealer-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading" style="font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('$44,08,000','car-dealer-shop'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-rating-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-rating-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e('Lorem Ipsum','car-dealer-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ratig-no","style":{"typography":{"fontSize":"16px"}}} -->
<p class="ratig-no" style="font-size:16px"><?php esc_html_e('5','car-dealer-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-emi-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-emi-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"emi-text","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="emi-text has-primary-color has-text-color has-link-color" style="font-size:14px"><span><?php esc_html_e('EMIs from $8,641/month','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"car-icon-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
<p class="car-icon-text has-primary-color has-text-color has-link-color has-extra-small-font-size"><span><?php esc_html_e('4 WD','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('See Details','car-dealer-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"main-box wow fadeInLeft","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group main-box wow fadeInLeft has-base-background-color has-background" style="border-radius:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":94,"sizeSlug":"full","linkDestination":"none","align":"center","className":"car-img"} -->
<figure class="wp-block-image aligncenter size-full car-img"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/car2.png' ); ?>" alt="" class="wp-image-94"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"car-name-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-name-box"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}}} -->
<h5 class="wp-block-heading" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('Cruza X1','car-dealer-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading" style="font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('$24,08,000','car-dealer-shop'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-rating-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-rating-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e('Lorem Ipsum','car-dealer-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ratig-no","style":{"typography":{"fontSize":"16px"}}} -->
<p class="ratig-no" style="font-size:16px"><?php esc_html_e('5','car-dealer-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-emi-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-emi-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"emi-text","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="emi-text has-primary-color has-text-color has-link-color" style="font-size:14px"><span><?php esc_html_e('EMIs from $8,641/month','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"car-icon-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
<p class="car-icon-text has-primary-color has-text-color has-link-color has-extra-small-font-size"><span><?php esc_html_e('4 WD','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('See Details','car-dealer-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"main-box wow fadeInLeft","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group main-box wow fadeInLeft has-base-background-color has-background" style="border-radius:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":93,"sizeSlug":"full","linkDestination":"none","align":"center","className":"car-img"} -->
<figure class="wp-block-image aligncenter size-full car-img"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/car3.png' ); ?>" alt="" class="wp-image-93"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"car-name-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-name-box"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}}} -->
<h5 class="wp-block-heading" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('Tornex Evo','car-dealer-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading" style="font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('$12,08,000','car-dealer-shop'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-rating-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-rating-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e('Lorem Ipsum','car-dealer-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ratig-no","style":{"typography":{"fontSize":"16px"}}} -->
<p class="ratig-no" style="font-size:16px"><?php esc_html_e('5','car-dealer-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"car-emi-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group car-emi-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"emi-text","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="emi-text has-primary-color has-text-color has-link-color" style="font-size:14px"><span><?php esc_html_e('EMIs from $8,641/month','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"car-icon-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
<p class="car-icon-text has-primary-color has-text-color has-link-color has-extra-small-font-size"><span><?php esc_html_e('4 WD','car-dealer-shop'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('See Details','car-dealer-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->