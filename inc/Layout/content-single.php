<?php
/**
 * Content: Single post page.
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_single_post_share       = $CS_redux['CS-single-post-share']['enabled'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>
	<div class="CS-single-thumbnail">
		<a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
	</div> <!-- single-thumbnail -->
	<?php endif; ?>

	<div class="CS-single-body <?php if(!empty($CS_single_sidebar)) : ?>small-12 large-12<?php else: ?>small-11 medium-8 large-8<?php endif; ?> small-centered columns">

		<?php if ( ! is_page() ) : ?>
		<div class="single-header">
			<span class="CS-single-author"><a href="#"><?php the_author(); ?></a></span>
			<time class="CS-single-date" datetime="<?php the_time('Y-m-d H:i'); ?>">/ <?php the_time('F j, Y'); ?></time> <!-- content-date -->
			<span class="CS-single-category">/ <?php the_category( ', ' ); ?></span>
		</div>
		<?php endif; ?>
		<?php if (! is_page() ) : ?>
		<div class="CS-single-share CS-content-share">
		<?php if ($CS_single_post_share): foreach ($CS_single_post_share as $key=>$value) {
			switch($key) {
				case 'facebook': get_template_part( 'inc/share/facebook' );
				break;
		 
				case 'twitter': get_template_part( 'inc/share/twitter' );
				break;
		 
				case 'google-plus': get_template_part( 'inc/share/google-plus' );
				break;
		 
				case 'pinterest': get_template_part( 'inc/share/pinterest' );    
				break;

				case 'comments': get_template_part( 'inc/share/comments' );    
				break;    
			}
		} endif; ?>
		</div> <!-- CS-content-share -->
		<?php else : ?>
		<div class="CS-single-share CS-content-share">
		<?php if ($CS_single_post_share): foreach ($CS_single_post_share as $key=>$value) {
			switch($key) {
				case 'facebook': get_template_part( 'inc/share/facebook' );
				break;
		 
				case 'twitter': get_template_part( 'inc/share/twitter' );
				break;
		 
				case 'google-plus': get_template_part( 'inc/share/google-plus' );
				break;
		 
				case 'pinterest': get_template_part( 'inc/share/pinterest' );    
				break;
			}
		} endif; ?>
		</div> <!-- CS-content-share -->
		<?php endif; ?>






		<h2 class="CS-single-title <?php if(!empty($CS_single_sidebar)) : ?>mq-single-title<?php endif; ?> "><?php the_title(); ?></h2>


		<div class="CS-single-content <?php if(!empty($CS_single_sidebar)) : ?>mq-single-content<?php endif; ?>">
			<?php the_content(); ?>
		</div> <!-- single-content -->
		


</article><!-- #post-## -->

<?php if(is_single()) : ?>
	<?php get_template_part('inc/parts/related_posts'); ?>
<?php endif; ?>

<?php if(is_single()) : ?>
	<?php get_template_part('inc/parts/single-pagination'); ?>
<?php endif; ?>

<?php if(is_single()) : ?>
	<?php comments_template( '', true );  ?>
<?php endif; ?>

