<?php

function wunderfurn_theme_styles() {

  wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );

}
add_action( 'wp-enqueue_scripts', 'wunderfurn_theme_styles' );

function wunderfurn_theme_js() {

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', '', '', false );

}
add_action( 'wp-enqueue_scripts', 'wunderfurn_theme_js' );

?>
