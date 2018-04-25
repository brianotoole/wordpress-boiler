<?php
// custom jQuery
function custom_jquery() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);
}
add_action('wp_enqueue_scripts', 'custom_jquery');
?>
