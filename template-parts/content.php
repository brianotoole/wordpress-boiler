<?php // Content Default ?>

<div class="container">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

</div><!--/.container-->