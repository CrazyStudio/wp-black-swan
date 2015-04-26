<?php
/**
 * Social button: Tumblr
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-tumblr' ] ) ) : ?>
	<a class="social-icon" href="http://<?php echo esc_url( $CS_redux[ 'CS-tumblr' ] ); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
<?php endif; ?>