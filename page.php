<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php if( is_home() || is_front_page() ) : ?>
    <div class="full-frame-fill" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
    </div>
  <?php endif; ?>

  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
