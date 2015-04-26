<?php
/**
 * The template for displaying all single posts.
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_single_sidebar	= $CS_redux['CS-single-sidebar'];
get_header(); ?>

<main class="CS-site-content-main small-12 <?php if(!empty($CS_redux['CS-single-sidebar'])) : ?>medium-7 CS-sidebar-text <?php else: ?>medium-12 <?php endif; ?>  columns">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( '/inc/layout/content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

</main> <!-- CS-site-content-main -->

<?php if(!empty($CS_redux['CS-single-sidebar'])) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>