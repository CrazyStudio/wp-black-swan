<?php
/**
 * Social button: Facebook
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-facebook' ] ) ) : ?>
	<a class="CS-social-icon" href="http://facebook.com/<?php echo esc_url( $CS_redux[ 'CS-facebook' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-facebook">
			</use>
		</svg>
	</a>
<?php endif; ?>