<?php
/**
 * The template for displaying 404 pages (not found).
 *
 */
get_header(); ?>

<div class="CS-404">
	<main class="CS-site-content-main row" role="main">

		<section class="CS-404-section small-12 columns">

			<header class="CS-404-header small-12 columns small-centered">
				<h1 class="CS-404-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'black-swan' ); ?></h1>
			</header> 

			<div class="CS-404-content small-10 medium-9 columns small-centered">
				<p class="CS-404-text"><?php _e( "The page you are looking for is no longer here, or never existed in the first place (bummer). You can try searching for what you are looking for using the form below. If that still doesn't provide the results you are looking for, you can always start over from the home page.", 'black-swan' ); ?></p>
			</div>

				<?php get_search_form(); ?>

		</section> <!-- CS-404-section -->

	</main> <!-- CS-site-content-main -->
</div> <!-- CS-404 -->

<?php get_footer(); ?>
