<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Black Swan
 */
?>

<main class="CS-site-content-main">
	<div class="CS-no-content">

		<header class="CS-no-content-header">
			<h1 class="CS-no-content-title"><?php _e( 'Nothing Found', 'black-swan' ); ?></h1>
		</header> 

		<div class="CS-no-content-section">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'black-swan' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'black-swan' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'black-swan' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>

		</div><!-- .page-content -->

	</div> <!-- CS-no-content -->

</main> <!-- CS-site-content-main -->
