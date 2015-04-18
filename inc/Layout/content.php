<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>    

    <?php if(has_post_thumbnail()) : ?>
        <div class="content-thumbnail">
            <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div> <!-- content-thumbnail -->
    <?php endif; ?> 
    
    <div class="content-header small-11 large-8 small-centered columns">

        <span class="content-category">
            <?php the_category( ', ' ); ?>
        </span> <!-- content-category -->

        <?php the_title( sprintf( '<h1 class="content-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        
        <div class="content-content">
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