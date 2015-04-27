<?php
/**
 * The template for displaying all pages.
 *
 * @package Black Swan
 */
get_header(); ?>

<main class="CS-site-content-main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( '/inc/layout/content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

		</main> <!-- CS-site-content-main -->

<?php get_footer(); ?>