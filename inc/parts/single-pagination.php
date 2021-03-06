<?php
/**
 * Create links to next and prev posts. Also adds a share area.
 *
 * @uses inc/layout/content-single.php
 *
 */
$prev_post = get_previous_post();
$next_post = get_next_post();
global $CS_redux; ?>

<div class="CS-single-pagination row">

	<div class="CS-pagination-section-left <?php if ( !empty( $CS_redux[ 'CS-single-sidebar' ] ) ) : ?>small-12 medium-12<?php else: ?>small-12 medium-4<?php endif; ?> columns">
		
		<?php if ( !empty( $prev_post ) ) : ?>
			<div class="CS-pagination-prev">
				
				<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
					<div class="CS-pagination-arrow">
						<svg class="CS-icon-arrow-left">
							<use xlink:href="#icon-arrow-left">
							</use>
						</svg>
					</div>
					<div class="CS-pagination-text">
						<span>Previous Post</span>
						<h5><?php echo get_the_title( $prev_post->ID ); ?></h5>
					</div>
				</a>

			</div> <!-- CS-pagination-prev -->
		<?php endif; ?>

	</div> <!-- CS-pagination-section-left -->

	<div class="CS-pagination-section-middle <?php if ( !empty( $CS_redux[ 'CS-single-sidebar' ] ) ) : ?>small-12 medium-12<?php else: ?>small-12 medium-4<?php endif; ?> columns">
		
		<div class="CS-pagination-share CS-content-share">
	        <?php if ( $CS_redux[ 'CS-single-post-share' ][ 'enabled' ] ): foreach ( $CS_redux[ 'CS-single-post-share' ][ 'enabled' ] as $key=>$value) {
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

	<div class="CS-pagination-section-right <?php if ( !empty( $CS_redux[ 'CS-single-sidebar' ] ) ) : ?>small-12 medium-12<?php else: ?>small-12 medium-4<?php endif; ?> columns">
	
		<?php if ( !empty( $next_post ) ) : ?>
			<div class="CS-pagination-next">
				
				<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
					<div class="CS-pagination-arrow">
						<svg class="CS-icon-arrow-right">
							<use xlink:href="#icon-arrow-right">
							</use>
						</svg>
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