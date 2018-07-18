<?php // Index

// Header
get_header(); 

// Hero
get_template_part('template-parts/hero', '');

if ( have_posts() ) :
  while ( have_posts() ) : the_post(); 
  // Content -- Default (Basic Loop)
  get_template_part('template-parts/content', '');
  endwhile;
  else : 
  // Content -- None (404)
  get_template_part('template-parts/content', 'none');
endif;

// Footer
get_footer(); 

?>