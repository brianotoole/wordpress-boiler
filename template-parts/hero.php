<?php
// Custom Field Group == Component: Hero
//$hero_title = get_field('home_hero_title');
//$hero_subheading = get_field('home_hero_subheading');
//$hero_button = get_field('home_hero_button');
?>
<section class="hero">
  <div class="hero__content container">
      <h1 class="hero__title">WP Theme Boilerplate</h1>
      <p class="hero__subtitle">A minimalistic wordpress theme that follows BEM methodology and comes preloaded with a few resusable components and design considerations that will help save time with initial setup.</p>
      <div class="hero__btn-container">
        <a href="#" class="btn btn--primary js-modal-trigger">Modal Example</a>
      </div>
  </div>
</section>

<!-- MODAL -->
<div class="modal">
  <div class="modal__inner">
    <div class="container container--narrow">
      <h2 class="modal__title">A Modal</h2>
      <p class="modal__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi fugit amet reprehenderit in ut quae ad aspernatur ipsa quasi atque qui, rem ratione, provident dignissimos fugiat delectus odio non a?</p>
    </div><!--/.container-->
  </div><!--/.modal__inner-->
  <div class="modal__close">X</div>
</div><!--/.modal-->
<!-- /MODAL -->