<?php
/**
 * The template for displaying all single posts.
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_single_sidebar;
get_header(); ?>

<main id="site-content-main" class="site-content-main small-12 <?php if(!empty($CS_single_sidebar)) : ?>medium-7 <?php else: ?>medium-12 <?php endif; ?>  columns">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( '/inc/layout/content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

</main> <!-- site-content-main -->

<?php if(!empty($CS_single_sidebar)) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>