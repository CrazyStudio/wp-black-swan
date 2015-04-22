<?php
/**
 * Social button: Google Plus
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_single_post_share       = $CS_redux['CS-single-post-share']['enabled'];

$prev_post = get_previous_post();
$next_post = get_next_post();
?>
<div class="post-pagination row">
			
	<div class="pagination-box small-4 columns">
		<?php if (!empty( $prev_post )) : ?>
		<div class="prev-post">
			<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
			<div class="arrow">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="pagi-text">
				<span>Previous Post</span>
				<h5><?php echo get_the_title( $prev_post->ID ); ?></h5>
			</div>
			</a>
		</div>
		<?php endif; ?>
	</div>
	<div class="pagination-box small-4 columns">
		<div class="content-share single-bottom-share">
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
	        </div> <!-- content-share -->
	</div>
	<div class="pagination-box small-4 columns">
	<?php if (!empty( $next_post )) : ?>
	<div class="next-post">
		<a href="<?php echo get_permalink( $next_post->ID ); ?>">
		<div class="arrow">
			<i class="fa fa-angle-right"></i>
		</div>
		<div class="pagi-text">
			<span>Next Post</span>
			<h5><?php echo get_the_title( $next_post->ID ); ?></h5>
		</div>
		</a>
	</div>
	<?php endif; ?>
	</div>
</div>