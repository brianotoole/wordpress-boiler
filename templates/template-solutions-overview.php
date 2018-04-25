<?php /* Template Name: Solutions Overview */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

  <div class="section section--sm intro-text u-text-center">
<div class="container">
    <p><?php get_template_part('template-parts/loop','content'); ?></p>
  </div>
</div>
<!-- /.section -->

<?php $solution_1 = get_field('solution_1'); ?>

<div class="solution-box">
  <div class="solution-box__bg solution-box__bg--search" style="background-image: url(<?php echo $solution_1['image']['url']; ?>);"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2><?php echo $solution_1['heading']; ?></h2>
          <hr class="hr--small hr--left hr--accent">
          <h3><?php echo $solution_1['subheading']; ?></h3>
          <p><?php echo $solution_1['content']; ?></p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box -->

<?php $solution_2 = get_field('solution_2'); ?>
<div class="solution-box solution-box--reverse">
  <div class="solution-box__bg solution-box__bg--select" style="background-image: url(<?php echo $solution_2['image']['url']; ?>);"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2><?php echo $solution_2['heading']; ?></h2>
          <hr class="hr--small hr--left hr--accent">
          <h3><?php echo $solution_2['subheading']; ?></h3>
          <p><?php echo $solution_2['content']; ?></p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box.solution-box--reverse -->

<?php $solution_3 = get_field('solution_3'); ?>
<div class="solution-box">
  <div class="solution-box__bg solution-box__bg--manage" style="background-image: url(<?php echo $solution_3['image']['url']; ?>);"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2><?php echo $solution_3['heading']; ?></h2>
          <hr class="hr--small hr--left hr--accent">
          <h3><?php echo $solution_3['subheading']; ?></h3>
          <p><?php echo $solution_3['content']; ?></p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
