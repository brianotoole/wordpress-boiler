<?php //Flexible Component Library

// check if the flexible content field has rows of data 
// $alt_layout_counts is used for alternating content field, can remove if not using that module
if( have_rows('component_library') ):
  $alt_layout_counts = array(); 
  $feat_layout_counts = array(); ?>


  <section class="section">
    <?php while ( have_rows('component_library') ) : the_row(); ?>


      <?php // Component: Basic Content ?>
      <?php if( get_row_layout() == 'component_basic_content' ): ?>
      <div class="component component-basic-content">
        <?php get_template_part( 'components/basic-content' ); ?>
      </div>

      <?php // Another Component Here ?>



      <?php endif; ?>
    <?php endwhile; ?>
  </section>

  
  <?php else : //no flexible content layouts found ?>
<?php endif; ?>