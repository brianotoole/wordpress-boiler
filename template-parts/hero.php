<?php // HERO

// Custom Field Group == Component: Hero
$hero_title= get_field('hero_title');
$hero_subtitle= get_field('home_hero_subtitle');
$hero_button = get_field('home_hero_button');
// get slug name via post_name property
$slug_name = get_post_field('post_name', get_post());
?>

<section class="hero hero--<?php echo $slug_name; ?>">
  <div class="hero__content container">
      <h1 class="hero__title">WP Theme Boilerplate</h1>
      <p class="hero__subtitle">A minimalistic wordpress theme that follows BEM methodology and comes preloaded with a few resusable components and design considerations that will help save time with initial setup.</p>
      <div class="hero__btn-container">
        <a href="#" class="btn btn--primary js-modal-trigger">Modal Example</a>
      </div>
  </div>
</section>
