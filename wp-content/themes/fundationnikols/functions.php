<?php
  function fundationnikols_assets() {
    // wp_enqueue_style( 'generatepress-style', get_theme_root_uri().'/generatepress/assets/style.css' );
    wp_enqueue_style( "fundationnikols-style", get_stylesheet_directory_uri().'/assets/css/main.css' );
    wp_enqueue_script( "fundationnikols-js",get_template_directory_uri()."/assets/js/script.js", array('jquery'), '', true );
  }
  add_action('wp_enqueue_scripts', 'fundationnikols_assets');
?>