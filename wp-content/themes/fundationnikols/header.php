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
        <!-- <ul class="nav-list">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="javascript:void(0)">Services</a>
            <ul class="nav-dropdown">
              <li>
                <a href="#!">Web Design</a>
              </li>
              <li>
                <a href="#!">Web Development</a>
              </li>
              <li>
                <a href="#!">Graphic Design</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Pricing</a>
          </li>
          <li>
            <a href="javascript:void(0)">Portfolio</a>
            <ul class="nav-dropdown">
              <li>
                <a href="#!">Web Design</a>
              </li>
              <li>
                <a href="#!">Web Development</a>
              </li>
              <li>
                <a href="#!">Graphic Design</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
        </ul> -->
        <?php wp_nav_menu(
          array(
            "menu" => 'menu-principal'
          )
        ); ?>
      </nav>
    </div>
  </header>
</body>