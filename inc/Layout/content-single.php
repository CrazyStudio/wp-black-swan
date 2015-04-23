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

    <div class="single-body <?php if(!empty($CS_single_sidebar)) : ?>small-12 large-12<?php else: ?>small-11 medium-8 large-8<?php endif; ?> small-centered columns">

    	<div class="single-header">
    		<span class="single-author"><a href="#"><?php the_author(); ?></a></span>
    		<time class="single-date" datetime="<?php the_time('Y-m-d H:i'); ?>">/ <?php the_time('F j, Y'); ?></time> <!-- content-date -->
			<span class="single-category">/ <?php the_category( ', ' ); ?></span>
    	</div>

        <div class="single-share content-share">
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
        </div> <!-- content-share -->

		<h2 class="<?php if(!empty($CS_single_sidebar)) : ?>mq-single-title<?php endif; ?> single-title"><?php the_title(); ?></h2>


		<div class="<?php if(!empty($CS_single_sidebar)) : ?>mq-single-content<?php endif; ?> single-content">
            <?php the_content(); ?>
        </div> <!-- single-content -->
        


</article><!-- #post-## -->

<?php if(is_single()) : ?>
        <?php get_template_part('inc/parts/related_posts'); ?>
    <?php endif; ?>

<?php if(is_single()) : ?>
        <?php get_template_part('inc/parts/single-pagination'); ?>
    <?php endif; ?>

<?php comments_template( '', true );  ?>
