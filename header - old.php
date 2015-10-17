<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verdadera
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    
<style>
    .site-header{
        background: <?php echo get_theme_mod( 'header_bgcolor' ); ?>;
    }
    .site-title a{
        color: <?php echo get_theme_mod( 'header_titlecolor' ); ?>;
    }
    .main-navigation a{
        color: <?php echo get_theme_mod( 'header_navcolor' ); ?>;
    }
    .main-navigation a:hover{
        color: <?php echo get_theme_mod( 'header_navcolorhover' ); ?>;
    }
     .site-info{
        background-color: <?php echo get_theme_mod( 'header_navcolorhover' ); ?>;
    }
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'verdadera' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'verdadera' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'navmenu', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
