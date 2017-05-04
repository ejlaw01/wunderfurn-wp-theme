<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php if(get_field('images')): while(the_repeater_field('images')): ?>

  <div class="gallery-image <?php the_sub_field('layout') ?>" style="background-image:url('<?php the_sub_field('image') ?>')">
  </div>

  <?php endwhile; endif; ?>

<?php endwhile; endif; ?>
