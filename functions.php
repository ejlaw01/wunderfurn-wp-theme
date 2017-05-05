<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


function wunderfurn_theme_styles() {

  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'skeleton_css', get_template_directory_uri() . '/css/skeleton.css' );
  wp_enqueue_style( 'sass_compiled_css', get_template_directory_uri() . '/css/main.css' );
  wp_enqueue_style( 'google_font_lato', 'https://fonts.googleapis.com/css?family=Muli:300,400,700' );
  wp_enqueue_style( 'wunderfurn_main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wunderfurn_theme_styles' );

function wunderfurn_theme_js() {

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', '', '', false );

}
add_action( 'wp-enqueue_scripts', 'wunderfurn_theme_js' );

if( !defined(THEME_IMG_PATH)){
 define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

?>
