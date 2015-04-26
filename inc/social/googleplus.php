<?php
/**
 * Social button: Google Plus
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-googleplus' ] ) ) : ?>
	<a class="social-icon" href="http://plus.google.com/<?php echo esc_url( $CS_redux[ 'CS-googleplus' ] ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
<?php endif; ?>



