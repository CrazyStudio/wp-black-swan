<?php
/**
 * @package Black Swan
 */
global $CS_redux;
$CS_homepage_sidebar    = $CS_redux['CS-homepage-sidebar'];
$CS_content_share       = $CS_redux['CS-homepage-sidebar'];
$CS_classic_share       = $CS_redux['CS-classic-share']['enabled'];
$pin_image              = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>    

    <?php if(has_post_thumbnail()) : ?>
        <div class="content-thumbnail">
            <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div> <!-- content-thumbnail -->
    <?php endif; ?> 
    
    <div class="content-header <?php if(!empty($CS_homepage_sidebar)) : ?>small-12 large-12<?php else: ?>small-11 medium-9 large-8<?php endif; ?> small-centered columns">

        <span class="content-category">
            <?php the_category( ', ' ); ?>
        </span> <!-- content-category -->
        
        <h2 class="<?php if(!empty($CS_homepage_sidebar)) : ?>mq-content-title<?php endif; ?> content-title"><a rel="bookmark" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="<?php if(!empty($CS_homepage_sidebar)) : ?>mq-content-content<?php endif; ?> content-content">
            <?php the_content(__('Continue Reading')); ?>
        </div> <!-- content-content -->

        <div class="CS-content-share">
        <?php if ($CS_classic_share): foreach ($CS_classic_share as $key=>$value) {
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
        
        <time class="content-date" datetime="<?php the_time('Y-m-d H:i'); ?>">
            <?php the_time('F j, Y'); ?>
        </time> <!-- content-date -->

    </div>  

</article>