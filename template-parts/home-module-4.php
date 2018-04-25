<?php
// module 4: OUR STORY
$module_4_heading = get_field('home_module_4_heading');
$module_4_description = get_field('home_module_4_description');
$module_4_image = get_field('home_module_4_image');
$module_4_button = get_field('home_module_4_button');
?>
<section class="section section--offset-image section--secondary" id="our_story">
 <div class="section__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2><?php echo $module_4_heading; ?></h2>
        <hr class="hr--small hr--left hr--white">
        <p class="section__description"><?php echo $module_4_description; ?></p>
        <a href="<?php echo $module_4_button['url']; ?>" class="btn btn--outline bg-ref--secondary"><?php echo $module_4_button['title']; ?></a>
      </div>
      <div class="col-sm-6">
        <div class="shape-wrapper">
          <div class="section__shape"></div>
          <div class="section__image">
            <img src="<?php echo $module_4_image['url']; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
