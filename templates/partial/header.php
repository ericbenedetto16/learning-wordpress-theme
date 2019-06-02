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
  <body <?php body_class() ?>>
    <header class="front-page">
      <section><?php the_custom_logo(); ?></section>
      <div class="nav-wrapper">
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
      <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'nav_menu' ) ); ?>
    </aside>