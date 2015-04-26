<?php
/**
 * Social button: Twitter
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-twitter' ] ) ) : ?>
	<a class="social-icon" href="http://twitter.com/<?php echo esc_url( $CS_redux[ 'CS-twitter' ] ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
<?php endif; ?>