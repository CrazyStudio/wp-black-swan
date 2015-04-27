<?php
/**
 * Social button: Google Plus
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-googleplus' ] ) ) : ?>
	<a class="CS-social-icon" href="http://plus.google.com/<?php echo esc_url( $CS_redux[ 'CS-googleplus' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-googleplus">
			</use>
		</svg>
	</a>
<?php endif; ?>



