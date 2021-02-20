<?php

function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles',  get_template_directory_uri() . '/css/normalize.css');
}

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

?>