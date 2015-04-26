<?php
/**
 * Social button: Instagram
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-instagram' ] ) ) : ?>
	<a class="CS-social-icon" href="http://instagram.com/<?php echo esc_url( $CS_redux[ 'CS-instagram' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-instagram">
			</use>
		</svg>
	</a>
<?php endif; ?>



