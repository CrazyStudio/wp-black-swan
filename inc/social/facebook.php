<?php
/**
 * Social button: Facebook
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-facebook' ] ) ) : ?>
	<a class="social-icon" href="http://facebook.com/<?php echo esc_url( $CS_redux[ 'CS-facebook' ] ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
<?php endif; ?>