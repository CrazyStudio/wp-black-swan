<?php
/**
 * The main template file.
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_homepage_sidebar	= $CS_redux['CS-homepage-sidebar'];
get_header(); ?>

<main class="CS-site-content-main small-12 <?php if(!empty($CS_homepage_sidebar)) : ?>medium-7 <?php else: ?>medium-12 <?php endif; ?> columns">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'inc/layout/content' ); ?>

	<?php endwhile; ?>

	<div class="CS-site-pagination small-8 medium-4 small-centered columns">

		<?php wpex_pagination(); ?>

	</div>
	
	<?php endif; ?>	
	
</main>

<?php if(!empty($CS_homepage_sidebar)) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>