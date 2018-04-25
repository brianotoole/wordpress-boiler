<?php
// woocommerce supported theme
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

// disable WooCommerce default stylesheet
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
?>
