<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #CS-site-content div and all content after
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_footer_copy 	= $CS_redux['CS-footer-copy'];
?>
</div> <!-- CS-site-content: Found bottom of header.php -->



<footer id="site-footer" class="site-footer <?php if( ! is_active_sidebar( 'footer-big-widget') && ! is_active_sidebar( 'footer-medium-widget') && ! is_active_sidebar( 'footer-small-widget') ) { echo "php-site-footer-no-widget"; } ?>">
	
	<?php	if( is_active_sidebar( 'footer-big-widget') or is_active_sidebar( 'footer-medium-widget') or is_active_sidebar( 'footer-small-widget') ) : ?>
	
		<section class="footer-widgetarea row">
			
			<div class="mq-footer-widget footer-widget small-10 medium-6  small-centered medium-uncentered columns">
				
				<?php dynamic_sidebar( 'footer-big-widget' ); ?>

			</div>

			<div class="mq-footer-widget footer-widget small-5 medium-3 small-offset-1 medium-offset-0 large-offset-1 columns">
				
				<?php dynamic_sidebar( 'footer-medium-widget' ); ?>

			</div>

			<div class="mq-footer-widget footer-widget small-4 medium-3 large-2 small-offset-1 medium-offset-0 end columns">
				
				<?php dynamic_sidebar( 'footer-small-widget' ); ?>

			</div>
		</section> <!-- Footer-widgetarea -->

	<?php endif; ?>	

	<section class="mq-footer-copy footer-copy row">

		<div class="copy-body small-12 small-centered medium-uncentered medium-7 columns">
			<copy><?php if(!empty($CS_footer_copy)) : ?><?php echo $CS_footer_copy;?><?php else: ?>Copyright © 2015 Black Swan. All rights reserved.<?php endif; ?></copy>
		</div>

		<div class="copy-extra small-12 medium-5 columns">
			<?php $defaults = array(
					'container' 		=> false,
					'theme_location' 	=> 'footer',
					'menu_class' 		=> 'copy-extra-list',
					
					);
				wp_nav_menu( $defaults ); ?>

		</div>
	</section> <!-- footer-copy -->

</footer> <!-- site-footer -->

</div> <!-- site -->

<!-- <pre><?php print_r($CS_redux); ?></pre> -->

<?php wp_footer(); ?>

</body>
</html>