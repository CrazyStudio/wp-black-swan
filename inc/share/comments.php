<?php
/**
 * Share button: Comments (takes you to comments section).
 * 
 */
 if ( comments_open() ) : ?>
 <a class="CS-share-icon" href="<?php echo esc_url( get_permalink() ) ; ?>#CS-comments-wrap">
	<svg class="CS-icon-share-svg">
		<use xlink:href="#icon-comment">
		</use>
	</svg>
</a>
 <?php endif; ?>