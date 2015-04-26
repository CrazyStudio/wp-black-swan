<?php
/**
 * Social button: pinterest
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-pinterest' ] ) ) : ?>
	<a class="social-icon" href="http://pinterest.com/<?php echo esc_url( $CS_redux[ 'CS-pinterest' ] ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
<?php endif; ?>