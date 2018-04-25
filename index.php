<?php get_header(); ?>

<div class="container">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      the_content();
  ?>
  <?php endwhile; else : ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
