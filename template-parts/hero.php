<?php // HERO

// Custom Field Group == Component: Hero
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button = get_field('hero_button');
// get slug name via post_name property
$slug_name = get_post_field('post_name', get_post());
?>

<?php if ($hero_title) : ?>
<section class="hero hero--<?php echo $slug_name; ?>">
  <div class="hero__content container">
      <h1 class="hero__title"><?php echo $hero_title; ?></h1>
      <p class="hero__subtitle"><?php echo $hero_subtitle; ?></p>
      <div class="hero__btn-container">
        <a href="<?php echo $hero_button['url']; ?>" target="<?php echo $hero_button['target']; ?>" class="btn btn--primary"><?php echo $hero_button['title']; ?></a>
      </div><!--/.hero__btn-container-->
  </div><!--/.hero__content-->
</section><!--/.hero-->
<?php endif; ?>
