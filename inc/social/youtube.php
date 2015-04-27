<?php
/**
 * Social button: Youtube
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-youtube' ] ) ) : ?>
	<a class="CS-social-icon" href="http://youtube.com/<?php echo esc_url( $CS_redux[ 'CS-youtube' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-youtube">
			</use>
		</svg>
	</a>
<?php endif; ?>