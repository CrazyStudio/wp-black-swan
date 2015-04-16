<article id="post-<?php the_ID(); ?>" <?php post_class('standard-article'); ?>>
    

    <!-- Feature image -->
        <?php if(has_post_thumbnail()) : ?>
            <div class="entry-thumbnail">
                <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            </div>
        <?php endif; ?>
        <!-- Feature image -->
    
    <div class="entry-header small-11 large-8 small-centered columns">
            <!-- Category -->
            <span class="entry-category"><?php the_category( ', ' ); ?></span>
            <!-- Category -->

            <!-- Title -->
            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
            <!-- Title -->
            
            <!-- Content -->
            <?php the_content(__('Continue Reading...')); ?>
            <!-- Content -->
            <div class="content-social">
                <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="http://pinterest.com/"><i class="fa fa-google-plus"></i></a>
            </div>
            <time>4 July, 2014</time>


    </div>

</article>