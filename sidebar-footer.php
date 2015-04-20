<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Black Swan
 */

if ( ! is_active_sidebar( 'footer-widget' ) ) {
	return;
}
?>

<div id="secondary" class="columns" role="complementary">
	<?php dynamic_sidebar( 'footer-widget' ); ?>
</div><!-- #secondary -->
