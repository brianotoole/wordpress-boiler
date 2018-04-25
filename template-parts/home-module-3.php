<?php
// module 3: HOW IT WORKS
$module_3_heading    = get_field('home_module_3_heading');
$module_3_subheading = get_field('home_module_3_subheading');
$module_3_item_1     = get_field('home_module_3_item_1');
$module_3_item_2     = get_field('home_module_3_item_2');
$module_3_item_3     = get_field('home_module_3_item_3');
$module_3_button     = get_field('home_module_3_button');
?>
<section class="section" id="how_it_works">
  <div class="container u-text-center">
    <h2 class="section-title"><?php echo $module_3_heading; ?></h2>
    <hr class="hr--small hr--accent">
    <h3 class="section-subtitle"><?php echo $module_3_subheading; ?></h3>
    <div class="row marketing-points marketing-points--alt">

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-first"><?php echo $module_3_item_1['title']; ?><div class="line"></div></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_1['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_1['description']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-middle"><?php echo $module_3_item_2['title']; ?><div class="line"></div></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_2['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_2['description']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-last"><?php echo $module_3_item_3['title']; ?><div class="line"></div></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_3['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_3['description']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <a href="<?php echo $module_3_button['url']; ?>" class="btn btn--primary" id="how_it_works_button"><?php echo $module_3_button['title']; ?></a>
  </div>
</section><!-- /.section#how_it_works -->
