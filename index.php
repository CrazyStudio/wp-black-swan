<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_homepage_sidebar	= $CS_redux['CS-homepage-sidebar'];
get_header(); ?>

<main class="CS-site-content-main small-12 <?php if(!empty($CS_homepage_sidebar)) : ?>medium-7 <?php else: ?>medium-12 <?php endif; ?>  columns">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
		<?php get_template_part('inc/layout/content', '' ); ?>
			
	<?php endwhile; ?>
	<div class="CS-site-pagination small-8 medium-4 small-centered columns">
		<?php wpex_pagination(); ?>
	</div>
	<?php endif; ?>	



</main>

<?php if(!empty($CS_homepage_sidebar)) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>