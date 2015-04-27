<?php
/**
 * Social button: RSS
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-rss' ] ) ) : ?>
	<a class="CS-social-icon" href="<?php echo esc_url( $CS_redux[ 'CS-rss' ] ); ?>" target="_blank">
		<svg class="CS-icon-social">
			<use xlink:href="#icon-rss">
			</use>
		</svg>
	</a>
<?php endif; ?>