<?php


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Raleway&display=swap" rel="stylesheet">
  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <header id="masthead" class="site-header" role="banner">
    <div class="head-bar">
      <div class="head-bar-contents">
        <div class="logo">
          <h4>StartUp</h4>
        </div>
        <div id="hamburger-menu" class="none">
          <?php wp_nav_menu(array('theme_location' => 'global')); ?>
        </div>
        <div id="toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="header-menu">
        <?php wp_nav_menu(array('theme_location' => 'global')); ?>
      </div>
    </div>


  </header><!-- .site-header -->