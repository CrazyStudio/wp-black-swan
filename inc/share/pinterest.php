<?php
/**
 * Share button: pinterest
 * 
 */
$pin_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<a class="CS-share-icon" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php esc_url( the_permalink() ); ?>&media=<?php echo esc_url( $pin_image ) ; ?>&description=<?php the_title(); ?>">
	<svg class="CS-icon-share-svg">
		<use xlink:href="#icon-pinterest">
		</use>
	</svg>
</a>