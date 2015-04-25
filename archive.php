<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Black Swan
 */

get_header(); ?>

<main class="CS-site-content-main small-12 <?php if(!empty($CS_homepage_sidebar)) : ?>medium-7 <?php else: ?>medium-12 <?php endif; ?> columns">

		<?php if ( have_posts() ) : ?>

			<header class="CS-archive-header">
				<?php  
										if ( is_day() ) :
											echo _e( '<span class="CS-archive-subtitle">Daily Archives</span>', 'solopine' );
											printf( __( '<h1 class="CS-archive-title">%s</h1>', 'solopine' ), get_the_date() );

										elseif ( is_month() ) :
											echo _e( '<span class="CS-archive-subtitle">Monthly Archives</span>', 'solopine' );
											printf( __( '<h1 class="CS-archive-title">%s</h1>', 'solopine' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'solopine' ) ) );

										elseif ( is_year() ) :
											echo _e( '<span class="CS-archive-subtitle">Yearly Archives</span>', 'solopine' );
											printf( __( '<h1 class="CS-archive-title">%s</h1>', 'solopine' ), get_the_date( _x( 'Y', 'yearly archives date format', 'solopine' ) ) );

										elseif ( is_category() ) :
											echo _e( '<span class="CS-archive-subtitle">Browsing Category</span>', 'solopine' );
											printf( __( '<h1 class="CS-archive-title">%s</h1>', 'solopine' ), single_cat_title( '', false ) );

										elseif ( is_author() ) :
											echo _e( '<span class="CS-archive-subtitle">Author</span>', 'solopine' );
											printf( __( '<h1 class="CS-archive-title">%s</h1>', 'solopine' ), get_the_author() );

										else :
											_e( '<h1>Archives</h1>', 'solopine' );

										endif;
									?>
			</header> <!-- CS-archive-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'inc/layout/content' );
				?>

			<?php endwhile; ?>

			<div class="CS-site-pagination small-8 medium-4 small-centered columns">

			<?php wpex_pagination(); ?>

			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

</main> <!-- CS-site-content-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
