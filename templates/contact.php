<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

<section class="section" id="Contact_our_location">
  <div class="container u-text-center">
    <h2>OUR LOCATION</h2>
    <hr class="hr--small hr--accent">
    <address class="address-contact fit-box">
     <?php the_field('option_address','options'); ?><br>
     <a href="tel:<?php the_field('option_phone','options'); ?>" class="u-color-link"><?php the_field('option_phone','options'); ?></a><br>
     <a href="mailto:<?php the_field('option_email', 'options'); ?>" class="u-color-link x-js-fit-text">Email Us</a>
    </address>
  </div>
</section>

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
