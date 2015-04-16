<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="site-content">
 *
 * @package Black Swan
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<!-- meta data -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- SVG System Ref: https://css-tricks.com/svg-sprites-use-better-icon-fonts/ -->
<?php get_template_part( svg, defs ); ?> 
	
<div id="page" class="hfeed site header-fixed">
	
		<header id="site-header" class="site-header" role="banner">

		<div class="top-header row">

			<div id="site-branding" class="site-branding small-12 medium-9 small-centered medium-uncentered columns">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo bloginfo('template_directory') . '/images/logo.svg'; ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div> <!-- site-branding -->

			<div id="site-navigation-toggle" class="site-navigation-toggle small-8 medium-3 small-centered medium-uncentered columns">
				<button>
					<span id="toggle-title" data-open="Explore" data-close="Close">Explore</span>
					<svg id="main-button" class="icon-grid">
						<use xlink:href="#icon-grid">
						</use>
					</svg>
				</button> 
			</div> <!-- site-navigation-toggle -->

		</div> <!-- top-header -->

		<nav id="site-navigation" class="site-navigation" role="navigation">

			<div id="site-primary-menu" class="site-primary-menu">

				<ul class="row">

					<li class="menu-item medium-3 columns">
						<a href="#">About Black Swan</a>
						<ul class="dropdown">
							<li class="sub-item"><a href="#">Johan Smith</a></li>
							<li class="sub-item"><a href="#">Typography</a></li>
							<li class="sub-item"><a href="#">404 page</a></li>
							<li class="sub-item"><a href="#">Archive</a></li>
							<li class="sub-item"><a href="#">Contact</a></li>
						</ul>
					</li>
					
				</ul>

			</div> <!-- site-primary-menu -->

			







				</div>
				</header>
				</div>



















