<?php
  function fnk_assets() {
    wp_enqueue_style("fnk-style", get_stylesheet_directory_uri().'/assets/css/main.css');
    wp_enqueue_script("fnk-navbar-dinamic-jquery", get_theme_root_uri()."/foundationnikols/assets/js/navbar_dinamic.js", array('jquery'));
  }
  add_action('wp_enqueue_scripts', 'fnk_assets');


  function fnk_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Custom Logo
    if (has_custom_logo()) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_srcset($custom_logo_id, 'full');
      $logo_url = esc_url($logo[0]);
      $logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
      $width_default = $logo[1];
      $height_default = $logo[2];
    } else {
      $height_default = 160;
      $width_default = 160;
    }
    add_theme_support('custom-logo',
      array(
        'height' => $height_default,
        'width' => $width_default,
        "flex-width" => true,
        "flex-height" => true,
      )
    );
  }

  add_action('after_setup_theme', 'fnk_theme_support');

?>