<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Black Swan
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area small-8 small-centered medium-uncentered medium-5 large-4 large-offset-1 columns" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
