<?php
// Component Alternating Content
// Custom Field Group == Component Library

// Even/Odd var $alt_class is set (starts at 1, or 'odd')
// If even add '.reverse' to row to alternate position

$title = get_sub_field('alt_content_title');
$title_hide_option = get_sub_field('alt_content_title_hide');
$title_placement = get_sub_field('alt_content_title_placement');
$image = get_sub_field('alt_content_image');
$content = get_sub_field('alt_content_text');
?>

<div id="<?= $alt_class; ?>" class="container alt-content">
  <?php if (!$title_hide_option) : ?>
    <?php if ($title_placement == 'top'): ?>
      <h3 class="alt-content__title title-top u-text-center">
        <?= $title; ?>
      </h3>
      <div class="alt-content__scroll">
        <div class="alt-content__scroll-down">
          <div class="alt-content__scroll-down-line"></div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="alt-content-row row <?php if ($alt_class == 'even') echo 'reverse '; ?>between-xs">
    <div class="col-xs-12 col-sm-6 alt-content__text u-vertical-center">
      <?php if (!$title_hide_option) : ?>
        <?php if ($title_placement == 'content'): ?>
          <div class="alt-content__side-title">
            <h3 class="alt-content__title heading__dash heading__dash--visible-desktop">
              <?= $title; ?>
            </h3>
            <div class="alt-content__scroll">
              <div class="alt-content__scroll-down">
                <div class="alt-content__scroll-down-line"></div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <div class="alt-content__text--copy">
        <?= $content; ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 alt-content__image">
      <div class="alt-content__image--wrap">
        <img src="<?= $image['url']; ?>" /> 
      </div>
    </div>
  </div>
</div>