<?php
/**
 * Social button: Twitter
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-twitter' ] ) ) : ?>
	<a class="CS-social-icon" href="http://twitter.com/<?php echo esc_url( $CS_redux[ 'CS-twitter' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-twitter">
			</use>
		</svg>
	</a>
<?php endif; ?>