<?php //Flexible Component Library

// check if the flexible content field has rows of data 
// $alt_layout_counts is used for alternating content field, can remove if not using that module
if( have_rows('component_library') ):
  $alt_layout_counts = array(); 
  $feat_layout_counts = array();
?>


  <section class="section">
    <?php while ( have_rows('component_library') ) : the_row(); ?>

    <?php // Gather Row Counts
    // Alt Content -- gather count of rows to determine how they alternate
    $alt_layout = get_row_layout('component_alt_content');
      if (!isset($alt_layout_counts[$alt_layout])) {
        $alt_layout_counts[$alt_layout] = 0;
      }
        $alt_layout_counts[$alt_layout]++;
        $alt_class = 'even';
      if ($alt_layout_counts[$alt_layout] % 2) {
        $alt_class = 'odd';
      }
    ?>


    <?php // Component: Basic Content ?>
    <?php if( get_row_layout() == 'component_basic_content' ): ?>
    <div class="component component-basic-content">
      <?php get_template_part( 'components/basic-content' ); ?>
    </div>

    <?php // Component: Alternating Content ?>     
    <?php elseif( get_row_layout() == 'component_alt_content' ): ?>
    <div class="module module-alt-content">
      <?php 
        set_query_var('alt_class', $alt_class); //needed to pass $var to component file
        get_template_part( 'components/alt-content'); ?>
    </div>



      <?php endif; ?>
    <?php endwhile; ?>
  </section>

  
  <?php else : //no flexible content layouts found ?>
<?php endif; ?>