<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="navigation">
    <div class="nav-container">
      <div class="brand">
        <?php the_custom_logo() ?>
      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <?php wp_nav_menu(
          array(
            "theme_location" => "primary"
          )
        ); ?>
      </nav>
      <?php the_widget('header') ?>
    </div>
  </header>
</body>