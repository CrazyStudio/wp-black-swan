<?php
/**
 * @package Black Swan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>
        <div class="single-thumbnail">
            <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div> <!-- single-thumbnail -->
    <?php endif; ?>

    <div class="single-body <?php if(!empty($CS_single_sidebar)) : ?>small-12 large-12<?php else: ?>small-11 medium-8 large-8<?php endif; ?> small-centered columns">

    	<div class="single-header">
	    	
    		<!-- <span class="single-by">By</span> -->
    		<span class="single-author"><a href="#"><?php the_author(); ?></a></span>
    		<time class="single-date" datetime="<?php the_time('Y-m-d H:i'); ?>">/ <?php the_time('F j, Y'); ?></time> <!-- content-date -->
			<span class="single-category">
				/ <?php the_category( ', ' ); ?>  
			</span> <!-- single-category -->
    	</div>

		

		<h2 class="<?php if(!empty($CS_single_sidebar)) : ?>mq-single-title<?php endif; ?> single-title"><?php the_title(); ?></h2>

		<div class="<?php if(!empty($CS_single_sidebar)) : ?>mq-single-content<?php endif; ?> single-content">
            <?php the_content(__('Continue Reading')); ?>
        </div> <!-- single-content -->

</article><!-- #post-## -->
