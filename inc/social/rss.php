<?php
/**
 * Social button: RSS
 *
 */
global $CS_redux; ?>

<?php if ( !empty( $CS_redux[ 'CS-rss' ] ) ) : ?>
	<a class="social-icon" href="<?php echo esc_url( $CS_redux[ 'CS-rss' ] ); ?>" target="_blank"><i class="fa fa-rss"></i></a>
<?php endif; ?>