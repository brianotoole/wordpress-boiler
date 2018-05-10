<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>


<?php $module_1 = get_field('about_module_1'); ?>

<section class="section" id="our_story">
  <div class="container">
    <h2 class="u-text-center"><?php echo $module_1['heading']; ?></h2>
    <hr class="hr--small hr--accent">
    <div class="row">
      <div class="col-sm-6">
      <div class="section--sm u-text-larger our-story__content"><?php echo $module_1['content']; ?></div>
      </div>
      <div class="col-sm-6"><img src="<?php echo get_template_directory_uri() . '/assets/img/about-image-1.png'; ?>" alt=""></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
