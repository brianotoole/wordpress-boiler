<?php

// little function to include partials for functions
function include_function($filename) {
  return require_once( dirname( __FILE__ ) . '/functions/' . $filename . '.php' );
}

include_function('add-theme-support');

include_function('add-styles');

include_function('add-custom-jquery');

include_function('add-scripts');

include_function('add-custom-post-types');

include_function('add-svg-upload-support');

include_function('remove-head-junk');

include_function('remove-autoformatting');

include_function('remove-wpversion-nag');
