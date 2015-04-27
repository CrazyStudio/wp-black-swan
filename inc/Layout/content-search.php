<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('CS-content-search'); ?>>
	<header class="CS-content-search-header">
		<?php the_title( sprintf( '<h1 class="CS-content-search-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header>

	<div class="CS-content-search-excerpt">
		<?php the_excerpt(); ?>
	</div>

</article> <!-- CS-content-search -->
