<?php
  function fnk_assets() {
    wp_enqueue_style( "fundationnikols-style", get_stylesheet_directory_uri().'/assets/css/main.css' );
    wp_enqueue_script( "fundationnikols-js",get_template_directory_uri()."/assets/js/script.js", array('jquery'));
  }
  add_action('wp_enqueue_scripts', 'fnk_assets');


  function fnk_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',
      array(
        "width" => 150,
        "height" => 35,
        "flex-width" => true,
        "flex-height" => true,
      )
    );
  }
  add_action('after_setup_theme', 'fnk_theme_support');


  function fnk_add_menus() {
    register_nav_menus (
      array(
      'menu-principal' => "Menú Principal",
      'menu-responsive' => "Menú Responsive"
      )
    );
  }
  add_action('after_setup_theme', 'fnk_add_menus');
?>