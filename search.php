<?php
/**
 * The template for displaying search results pages.
 *
 * @package Black Swan
 */

get_header(); ?>

<main class="CS-site-content-main">

		<?php if ( have_posts() ) : ?>

			<header class="CS-search-header">
				<h1 class="CS-search-title"><?php printf( __( 'Search Results for: %s', 'black-swan' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header> <!-- CS-search-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php wpex_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

</main>
<?php get_footer(); ?>