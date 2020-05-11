<?php


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Raleway&display=swap" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header id="masthead" class="site-header" role="banner">
	<div class="head-bar">
		<div id="hamburger-menu" class="none">
			<?php wp_nav_menu( array('theme_location' => 'global' )); ?>
		</div>
		<div class="head-bar-contents">
			<div class="logo">
				<h4>RoimBlog</h4>
			</div>
			<div id="toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>

	<div class="site-branding">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</div><!-- .site-branding -->
	<div id="header-menu" class="header-menu">
		<?php wp_nav_menu( array('theme_location' => 'global' )); ?>
	</div>
</header><!-- .site-header -->
