<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="CS-site-content">
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_favicon_iso 		= $CS_redux['CS-add-favicon-iso']['url'];
$CS_favicon_png 		= $CS_redux['CS-add-favicon-png']['url'];
$CS_site_logo 			= $CS_redux['CS-add-logo-field']['url'];
$CS_homepage_sidebar    = $CS_redux['CS-homepage-sidebar'];
$CS_header_social      = $CS_redux['CS-header-social']['enabled'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- meta data -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if(!empty($CS_favicon_png)) :?>
	<link rel="icon" type="image/png" href="<?php echo $CS_favicon_png; ?>" />
<?php endif; ?>

<?php if(!empty($CS_favicon_iso)) :?>
	<link rel="shortcut icon" href="<?php echo $CS_favicon_iso; ?>" />
<?php endif; ?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'inc/parts/svg', 'system' ); ?> 
<div class="CS-site">

	<div class="CS-site-header-fixed">

		<header class="CS-site-header" role="banner">

			<div class="CS-top-header row">

				<div class="CS-site-branding small-12 medium-9 small-centered medium-uncentered columns">

					<?php if(empty($CS_site_logo)) : ?>

						<?php if(is_front_page()) : ?>
							<h1 class="CS-site-title"><a href="<?php echo home_url(); ?>"><img class="CS-site-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2 class="CS-site-title"><a href="<?php echo home_url(); ?>"><img class="CS-site-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>

					<?php else : ?>

						<?php if(is_front_page()) : ?>
							<h1 class="CS-site-title"><a href="<?php echo home_url(); ?>"><img class="CS-site-logo" src="<?php echo $CS_site_logo; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2 class="CS-site-title"><a href="<?php echo home_url(); ?>"><img class="CS-site-logo" src="<?php echo $CS_site_logo; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>

					<?php endif; ?>

					<h2 class="CS-site-description">
						<?php bloginfo( 'description' ); ?>
						
					</h2>

				</div> <!-- CS-site-branding -->

				<div id="CS-site-navigation-toggle" class="CS-site-navigation-toggle small-8 medium-3 small-centered medium-uncentered columns">

					<button class="CS-toggle-button">
						<span id="CS-toggle-title" class="CS-toggle-title" data-open="Explore" data-close="Close">Explore</span>
						<svg id="CS-toggle-icon" class="CS-toggle-icon">
							<use xlink:href="#icon-grid">
							</use>
						</svg>
					</button> 

				</div> <!-- CS-site-navigation-toggle -->

			</div> <!-- CS-top-header -->

			<nav id="CS-site-navigation" class="CS-site-navigation" role="navigation">

				<div class="CS-site-primary-menu">
				<?php $defaults = array(
						'container' 		=> false,
						'theme_location' 	=> 'primary',
						'menu_class' 		=> 'row',
						'menu_id'			=> 'primary-menu'
						);
					wp_nav_menu( $defaults ); ?>
				</div> <!-- CS-site-primary-menu -->

				<div class="CS-site-search row">
					<?php get_search_form(); ?>
				</div> <!-- CS-site-search -->

				<div class="CS-site-social small-centered small-12 columns">
					<?php if ($CS_header_social): foreach ($CS_header_social as $key=>$value) {
						switch($key) {
							case 'facebook': get_template_part( 'inc/social/facebook' );
							break;

							case 'twitter': get_template_part( 'inc/social/twitter' );
							break;

							case 'google-plus': get_template_part( 'inc/social/googleplus' );
							break;

							case 'pinterest': get_template_part( 'inc/social/pinterest' );    
							break;

							case 'instagram': get_template_part( 'inc/social/instagram' );    
							break;

							case 'tumblr': get_template_part( 'inc/social/tumblr' );    
							break; 

							case 'youtube': get_template_part( 'inc/social/youtube' );    
							break; 

							case 'rss': get_template_part( 'inc/social/rss' );    
							break;     
						}
					} endif; ?>
				</div> <!-- CS-site-social -->

			</nav> <!-- CS-site-navigation -->

		</header> <!-- CS-site-header -->

	</div> <!-- CS-site-header-fixed -->

<div class="CS-site-content <?php if(!empty($CS_homepage_sidebar)) : ?>small-collapse medium-uncollapse<?php else: ?>small-collapse large-uncollapse<?php endif; ?> row">