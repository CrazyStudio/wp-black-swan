<?php
/**
 * @package Black Swan
 */
global $CS_redux;
$CS_homepage_sidebar    = $CS_redux['CS-homepage-sidebar'];
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

        <div class="content-share">
            <a class="share-icon" href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
            <a class="share-icon" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
            <a class="share-icon" href="http://pinterest.com/"><i class="fa fa-google-plus"></i></a>
        </div> <!-- content-share -->
        
        <time class="content-date" datetime="<?php the_time('Y-m-d H:i'); ?>">
            <?php the_time('F j, Y'); ?>
        </time> <!-- content-date -->

    </div>

</article>