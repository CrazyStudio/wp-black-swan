<?php
/**
 * Social button: Instagram
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-instagram' ] ) ) : ?>
	<a class="social-icon" href="http://instagram.com/<?php echo esc_url( $CS_redux[ 'CS-instagram' ] ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
<?php endif; ?>



