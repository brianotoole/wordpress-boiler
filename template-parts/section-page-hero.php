<div class="page-hero">
  <div class="page-hero__bg" style="<?php if (has_post_thumbnail()) : ?>background-image: url(<?php echo the_post_thumbnail_url(); ?>);<?php endif; ?>"></div>
  <div class="page-hero__lead">
   <div class="page-hero__shape"></div>
    <div class="page-hero__lead-inner">
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
        the_post();
        $hero_text = get_field('hero_text');
      ?>
      <h1 class="h2"><?php the_title(); ?></h1>

      <hr class="hr--small hr--white">

      <h2 class="p"><?php if ($hero_text) { echo $hero_text; } else { echo 'A Holistic Approach to Temporary Housing'; } ?></h2>
        <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>
</div>
