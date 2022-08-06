<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fundacion Nikols</title>
  <?php wp_head() ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#!">Logo</a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="#!">Services</a>
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
            <a href="#!">Portfolio</a>
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
        </ul>
      </nav>
    </div>
  </header>
</body>