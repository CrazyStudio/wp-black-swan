<?php
/**
 * Social button: Youtube
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-youtube' ] ) ) : ?>
	<a class="social-icon" href="http://youtube.com/<?php echo esc_url( $CS_redux[ 'CS-youtube' ] ); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
<?php endif; ?>