<?php

/*
  Template Name: Gallery Page
*/

?>

<?php get_header(); ?>

<div class="frame-inner">

  <?php

    $args = array(
      'post_type' => 'gallery'
    );
    $query = new WP_Query( $args );

  ?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();?>

    <div class="category-thumbnail" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>"></a>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>
