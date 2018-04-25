<?php
// remove annoying autoformatting
foreach ( array( 'the_content', 'the_title', 'the_excerpt' ) as $hook ) {
  remove_filter( $hook, 'wptexturize' );
  remove_filter( $hook, 'wpautop' );
}
?>
