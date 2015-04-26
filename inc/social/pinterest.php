<?php
/**
 * Social button: pinterest
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-pinterest' ] ) ) : ?>
	<a class="CS-social-icon" href="http://pinterest.com/<?php echo esc_url( $CS_redux[ 'CS-pinterest' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-pinterest">
			</use>
		</svg>
	</a>
<?php endif; ?>