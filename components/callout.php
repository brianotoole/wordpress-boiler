<?php
// Component: Callout (Content)
// Custom Field Group == Component Library

$content = get_sub_field('callout_content');
?>

<div class="container callout-content">
  <div class="callout-content__block">
    <div class="callout-content__text">
      <h5><?= $content; ?></h5>
    </div>
  </div>
</div>