<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="pl-4">
      <section><?php the_custom_logo(); ?></section>

      <div class="nav-wrapper ml-5">
        <div class="btn-toggle-nav" onclick="toggleNav()">
          <div class="btn-toggle-nav-img">
          </div>
        </div>
        <nav class="nav-header-main">
          <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'nav_menu' ) ); ?>
        </nav>
      </div>
    </header>
    <aside class="nav-header-mobile">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><span>About Us</span>
          <ul>
            <li><a href="ourmission.php">Our Mission</a></li>
            <li><a href="whatwedone.php">What We've Done</a></li>
          </ul>
        </li>
        <li><span>What's New</span>
          <ul>
            <li><a href="events.php">Events & Articles</a></li>
            <li><a href="newsletters.php">Newsletter Archives</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
        <li class="hidden"><a href="signup.php">Join Us</a></li>
        <li class="button hidden"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="7HFWZJMBKC34N">
          <button class="paypal-button" type="submit" name="donate">Donate / Pay Dues</button>
        </form></li>
      </ul>
    </aside>