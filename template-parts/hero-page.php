<div class="hero hero--page">
  <div class="hero__bg" style="<?php if (has_post_thumbnail()) : ?>background-image: url(<?php echo the_post_thumbnail_url(); ?>);<?php endif; ?>"></div>
  <div class="hero__lead">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
    ?>
        <h1 class="h2"><?php the_title(); ?></h1>
        <hr class="hr--small hr--white">
        <h2 class="p"><?php the_field('hero_text'); ?></h2>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</div>
