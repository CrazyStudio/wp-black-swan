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

get_header(); ?>

<main id="site-content-main" class="site-content-main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
		<?php get_template_part('inc/layout/content', '' ); ?>
			
	<?php endwhile; ?>
	<div class="site-pagination small-8 medium-4 small-centered columns">
		<?php wpex_pagination(); ?>
	</div>
	<?php endif; ?>	

</main>

<?php get_footer(); ?>