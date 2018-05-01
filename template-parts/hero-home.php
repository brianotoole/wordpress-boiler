<?php
// module 1: HERO
$hero_heading = get_field('home_hero_heading');
$hero_subheading = get_field('home_hero_subheading');
$hero_button = get_field('home_hero_button');
?>
<div class="hero hero--home">
  <div class="hero__inner">
    <div class="hero__image-wrapper">
      <div class="hero__shape js-parallax" data-scroll-speed='2'></div>
      <div class="hero__image js-parallax" data-scroll-speed='4' style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-home.png'; ?>)">
      </div>
    </div>
    <div class="container">
      <div class="cta-box js-parallax" data-scroll-speed='8'>
        <div class="cta-box__inner">
          <div class="cta__heading-wrapper">
            <h2 class="cta__heading"><?php echo $hero_heading; ?></h2>
          </div>
          <hr class="hr--small hr--left">
          <div class="cta__description">
            <p><?php echo $hero_subheading; ?></p>
          </div>
          <div class="cta__btn-wrapper">
            <a href="<?php echo $hero_button['url']; ?>" class="btn btn--outline btn--white bg-ref--secondary"><?php echo $hero_button['title']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.hero.hero--home -->
