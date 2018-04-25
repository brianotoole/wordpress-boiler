<?php
$cta_heading = get_field('cta_heading');
$cta_button_text = get_field('cta_button_text');
$cta_button_link = get_field('cta_button_link');
?>
<?php if ($cta_heading) : ?>
 <div class="cta">
  <div class="cta__inner">
    <div class="container">
      <div class="cta__heading-wrapper">
        <h2 class="u-text-white js-fit-text"><?php echo $cta_heading; ?></h2>
      </div>
    </div>
    <a href="<?php if (!empty($cta_button_link)) { echo $cta_button_link['url']; } else { echo get_site_url() . '/contact'; } ?>" class="btn btn--large btn--primary"><?php echo $cta_button_text; ?></a>
  </div>
</div>
<?php endif; ?>
