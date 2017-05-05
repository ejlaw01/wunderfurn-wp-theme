<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >
    <div class="page-frame">
      <div class="horizontal-bar top-bar">
        <nav>

          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'nav'
            );
            wp_nav_menu( $defaults );
          ?>

        </nav>
      </div>
      <div class="vertical-bar left-bar">

      </div>
      <div class="horizontal-bar bottom-bar">
        <img src="<?php echo THEME_IMG_PATH; ?>/wunderfurn-mark-lockup.png" alt=""/>
      </div>
      <div class="vertical-bar right-bar">

      </div>
    </div>
