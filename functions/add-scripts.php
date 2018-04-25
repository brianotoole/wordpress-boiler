<?php
// add scripts
function spx_scripts() {
  // skip link focus fix
  //wp_enqueue_script( 'spx-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

  // main script file
  $ver = filemtime( get_template_directory() . '/dist/js/main.js');
  wp_enqueue_script( 'spx-scripts', get_theme_file_uri( '/dist/js/main.js' ), array('jquery'), $ver, true );

  // slick carousel
  //wp_enqueue_script( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array('jquery'), '1.8.1', true );
}
add_action( 'wp_enqueue_scripts', 'spx_scripts' );

?>
