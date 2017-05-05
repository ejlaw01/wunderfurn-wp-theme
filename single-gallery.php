<?php

  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);

?>

<?php get_header(); ?>

<div class="frame-inner scroller">

  <div class="gallery-column">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $column_height = 0;
        if(get_field('images')): while(the_repeater_field('images')):
      ?>

        <?php
          $size = get_sub_field('layout');

          if ( $size === 'small_horizontal' ) :
            $item_size = 1;
           elseif ( $size === 'medium_vertical' ) :
            $item_size = 2;
           elseif ( $size === 'medium_horizontal' ) :
            $item_size = 4;
           elseif ( $size === 'large_vertical' ) :
            $item_size = 8;
           elseif ( $size === 'large_horizontal' ) :
            $item_size = 16;
          endif;

          $column_height += $item_size;

          if ( $column_height > 8 ) :
            echo '</div>';
            echo '<div class="gallery-column">';
            $column_height = 0;
          endif;

          debug_to_console($column_height);
        ?>

        <img class="gallery-image <?php the_sub_field('layout') ?>" src="<?php the_sub_field('image') ?>" alt="">

      <?php endwhile; endif; ?>

    <?php endwhile; endif; ?>

  </div>

</div>

<?php get_footer(); ?>
