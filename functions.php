<?php

function wunderfurn_theme_styles() {

  wp_enqueue_style( 'wunderfurn_normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'wunderfurn_skeleton_css', get_template_directory_uri() . '/css/skeleton.css' );
  wp_enqueue_style( 'wunderfurn_google_font', 'https://fonts.googleapis.com/css?family=Lato' );
  wp_enqueue_style( 'wunderfurn_main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wunderfurn_theme_styles' );

function wunderfurn_theme_js() {

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', '', '', false );

}
add_action( 'wp-enqueue_scripts', 'wunderfurn_theme_js' );

?>
