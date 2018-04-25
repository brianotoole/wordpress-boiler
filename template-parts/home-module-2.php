<?php
// module 2: WHAT SETS US APART
$module_2_heading    = get_field( 'home_module_2_heading'    );
$module_2_subheading = get_field( 'home_module_2_subheading' );

$module_2_item_1_image       = get_field( 'home_module_2_item_1_image'       );
$module_2_item_1_title       = get_field( 'home_module_2_item_1_title'       );
$module_2_item_1_description = get_field( 'home_module_2_item_1_description' );

$module_2_item_2_image       = get_field( 'home_module_2_item_2_image'       );
$module_2_item_2_title       = get_field( 'home_module_2_item_2_title'       );
$module_2_item_2_description = get_field( 'home_module_2_item_2_description' );

$module_2_item_3_image       = get_field( 'home_module_2_item_3_image'       );
$module_2_item_3_title       = get_field( 'home_module_2_item_3_title'       );
$module_2_item_3_description = get_field( 'home_module_2_item_3_description' );

$module_2_button = get_field( 'home_module_2_button' );
?>

<section class="section section--tertiary" id="marketing_points">
  <div class="container u-text-center">
    <h2 class="u-color-white section-title"><?php echo $module_2_heading; ?></h2>
    <hr class="hr--small hr--accent">
    <h3 class="u-color-white section-subtitle"><?php echo $module_2_subheading; ?></h3>
    <div class="row marketing-points">

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_1_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_1_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_1_description; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_2_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_2_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_2_description; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_3_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_3_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_3_description; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row.marketing-points -->
    <?php
    // if button empty remove altogether
    if ($module_2_button) :
    ?>
    <a href="<?php echo $module_2_button['url']; ?>" class="btn btn--outline bg-ref--tertiary"><?php echo $module_2_button['title']; ?></a>
    <?php
    // if button empy compensate margin
    else :
    ?>
    <div style="margin-top: -2em;"></div>
    <?php endif; ?>
  </div>
</section>
<!-- /.section#marketing_points -->
