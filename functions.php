<?php

function add_theme_scripts() {
  wp_enqueue_style(  'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.css');
  wp_enqueue_style(  'style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'jqueryslim', get_template_directory_uri() . '/css/bootstrap/jquery.js');
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/css/bootstrap/popper.js');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.js'); 
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_widget_Support() {
  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );
}

add_action( 'widgets_init', 'add_Widget_Support' );

function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'add_Main_Nav' );

function tn_custom_excerpt_length( $length ) {
  return 35;
}
  
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 351);

?>