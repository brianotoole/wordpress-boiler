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


<?php $module_2 = get_field('about_module_2'); ?>

<section class="section section--tertiary has-image" id="mission">
<div class="section__bg" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/about-image-bg-1.png'; ?>')"></div>
 <div class="container u-text-center">
  <h2 class="u-text-center u-color-white"><?php echo $module_2['heading']; ?></h2>
  <hr class="hr--small hr--accent">
  <div class="section__content">
    <p><?php echo $module_2['content']; ?></p>
  </div>
  </div>
</section>


<?php $module_3 = get_field('about_module_3'); ?>

<section id="diversity" class="section section--image-left">
 <div class="section__img" style="background-image: url('<?php echo $module_3['image']['url']; ?>')"></div>
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-5">
      <div class="section__content--right">
      <h2><?php echo $module_3['heading']; ?></h2>
      <hr class="hr--small hr--left hr--accent">
      <div class="u-text-larger">
        <p><?php echo $module_3['content']; ?></p>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- /#diversity -->


<?php $module_4 = get_field('about_module_4'); ?>

<div class="container">
 <h2 class="u-text-center"><?php echo $module_4['heading']; ?></h2>
  <hr class="hr--small hr--accent">
  <div class="carousel">
  <?php
  $member_args = array(
    'post_type'   => 'teammember',
    'post_status' => 'publish'
  );
  $members = new WP_Query( $member_args );
  if( $members->have_posts() ) :
    while( $members->have_posts() ) :
      $members->the_post();
      $member_name = get_the_title();
      $member_description = get_the_content();
      $member_title = get_field('member_title');
  ?>
    <div class="carousel__slide">
      <div class="team-member">
        <div class="row">
          <div class="col-sm-6 team-member__info">
            <h4 class="team-member__title"><?php echo $member_title; ?></h4>
            <h4 class="team-member__name"><?php echo $member_name; ?></h4>
            <div class="team-member__description">
              <p><?php echo $member_description; ?></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member__photo"><img src="<?php echo the_post_thumbnail_url(); ?>" /></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.carousel__slide -->
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
  <!-- /.carousel -->
</div>
<!-- /.container -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
