<?php
/**
 * Social button: Tumblr
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-tumblr' ] ) ) : ?>
	<a class="CS-social-icon" href="http://<?php echo esc_url( $CS_redux[ 'CS-tumblr' ] ); ?>.tumblr.com/" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-tumblr">
			</use>
		</svg>
	</a>
<?php endif; ?>