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

<?php get_template_part( 'inc/parts/svg', 'system' ); ?> <!-- SVG System Ref: https://css-tricks.com/svg-sprites-use-better-icon-fonts/ -->
	
<div id="site" class="hfeed site site-header-fixed">
	
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
				<button class="toggle-button">
					<span id="toggle-title" class="toggle-title" data-open="Explore" data-close="Close">Explore</span>
					<svg id="toggle-icon" class="toggle-icon">
						<use xlink:href="#icon-grid">
						</use>
					</svg>
				</button> 
			</div> <!-- site-navigation-toggle -->

		</div> <!-- top-header -->

		<nav id="site-navigation" class="site-navigation" role="navigation">

			<div id="site-primary-menu" class="site-primary-menu">
			<?php $defaults = array(
					'container' 		=> false,
					'theme_location' 	=> 'primary',
					'menu_class' 		=> 'row',
					'menu_id'			=> 'primary-menu'
					);
				wp_nav_menu( $defaults ); ?>
			</div> <!-- site-primary-menu -->
			
			<div id="site-search" class="site-search row">
                <?php get_search_form(); ?>
            </div> <!-- site-search -->

            <div id="site-social" class="site-social small-centered small-12 columns"> 
                <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                <a href="http://pinterest.com/"><i class="fa fa-pinterest"></i></a>
                <a href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                <a href="http://"><i class="fa fa-tumblr"></i></a>
                <a href="http://youtube.com/"><i class="fa fa-youtube-play"></i></a>      
            </div> <!-- site-social -->

        </nav> <!-- site-navigation -->

    </header> <!-- site-header -->

</div> <!-- header-fixed -->

<div id="site-content" class="site-content row">