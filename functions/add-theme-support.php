<?php
if ( ! function_exists( 'spx_setup' ) ) :
  function spx_setup() {
    // translation support
    load_theme_textdomain( 'spx', get_template_directory() . '/languages' );

    // default posts and comments RSS feed links in head.
    add_theme_support( 'automatic-feed-links' );

    // dynamic title tags
    add_theme_support( 'title-tag' );

    // featured images
    add_theme_support( 'post-thumbnails' );

    // wp_nav_menu()
    register_nav_menus( array(
     'primary' => esc_html__( 'Primary', 'spx' ),
     'mobile'  => esc_html__( 'Mobile', 'spx')
    ) );
   }
    // ACF - Add Options page-header
    // Usage within template file: the_field('header_title', 'option');
    if( function_exists('acf_add_options_page') ) {
      acf_add_options_page();
    }

endif;
add_action( 'after_setup_theme', 'spx_setup' );
?>
