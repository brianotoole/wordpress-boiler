<?php
// Basic Content
// Custom Field Group == Component Library

$title = get_sub_field('basic_content_title');
$title_hide_option = get_sub_field('basic_content_title_hide');
$content = get_sub_field('basic_content_text');
?>

<div class="container basic-content">
  <?php if (!$title_hide_option) : ?>
    <h3 class="basic-content__title u-text-center">
      <?php echo $title; ?>
    </h3>
    <div class="basic-content__scroll">
      <div class="basic-content__scroll-down">
        <div class="basic-content__scroll-down-line"></div>
      </div>
    </div>
  <?php endif; ?>
  <div class="basic-content__block">
    <div class="basic-content__text">
      <?php echo $content; ?>
    </div>
  </div>
</div>