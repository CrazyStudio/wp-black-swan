<?php
/**
 * Post Pagination - Pagination for the single posts
 */

global $CS_redux;
$CS_single_post_share       = $CS_redux['CS-single-post-share']['enabled'];
$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<div class="CS-single-pagination row">
			
	<div class="CS-pagination-section-left small-4 columns">
		
		<?php if (!empty( $prev_post )) : ?>
		<div class="CS-pagination-prev">
			
			<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
			<div class="CS-pagination-arrow">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="CS-pagination-text">
				<span>Previous Post</span>
				<h5><?php echo get_the_title( $prev_post->ID ); ?></h5>
			</div>
			</a>

		</div> <!-- CS-pagination-prev -->
		<?php endif; ?>

	</div> <!-- CS-pagination-section-left -->

	<div class="CS-pagination-section-middle small-4 columns">
		
		<div class="CS-pagination-share CS-content-share">
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

	</div> <!-- CS-pagination-section-middle -->

	<div class="CS-pagination-section-right small-4 columns">
	
	<?php if (!empty( $next_post )) : ?>
	<div class="CS-pagination-next">
		
		<a href="<?php echo get_permalink( $next_post->ID ); ?>">
			<div class="CS-pagination-arrow">
				<i class="fa fa-angle-right"></i>
			</div>
			<div class="CS-pagination-text">
				<span>Next Post</span>
				<h5><?php echo get_the_title( $next_post->ID ); ?></h5>
			</div>
		</a>

	</div> <!-- CS-pagination-next -->
	<?php endif; ?>
	
	</div> <!-- CS-pagination-section-right -->

</div> <!-- CS-single-pagination -->