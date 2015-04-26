<?php
/**
 * Display all list types of content. Frontpage list, archive, categories etc.
 *
 *
 * @uses index.php
 *       archive.php
 *
 */
global $CS_redux; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'CS-content' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="CS-content-thumbnail">
			<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
		</div> <!-- CS-content-thumbnail -->
	<?php endif; ?> 

	<div class="CS-content-header <?php if ( !empty( $CS_redux[ 'CS-homepage-sidebar' ] ) ) : ?>small-12 large-12<?php else: ?>small-11 medium-9 large-8<?php endif; ?> small-centered columns">

		<span class="CS-content-category">
			<?php the_category( ', ' ); ?>
		</span> <!-- CS-content-category -->

		<h2 class="CS-content-title <?php if ( !empty( $CS_redux[ 'CS-homepage-sidebar' ] ) ) : ?>mq-content-title<?php endif; ?>">
			<a rel="bookmark" href="<?php echo esc_url( get_permalink() ); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<div class="CS-content-content <?php if( !empty( $CS_redux[ 'CS-homepage-sidebar' ] ) ) : ?>mq-content-content<?php endif; ?>">
			<?php the_content( __( 'Continue Reading' ) ) ; ?>
		</div> <!-- CS-content-content -->

		<div class="CS-content-share">
			<?php if ( $CS_redux[ 'CS-classic-share' ][ 'enabled' ] ): foreach ( $CS_redux[ 'CS-classic-share' ][ 'enabled' ] as $key=>$value) {
				switch($key) {
					case 'facebook': get_template_part( 'inc/share/facebook' );
					break;

					case 'twitter': get_template_part( 'inc/share/twitter' );
					break;

					case 'google-plus': get_template_part( 'inc/share/google-plus' );
					break;

					case 'pinterest': get_template_part( 'inc/share/pinterest' );
					break;

					case 'comments': get_template_part( 'inc/share/comments' );
					break;
				}
			} endif; ?>
		</div> <!-- CS-content-share -->

		<time class="CS-content-date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( 'F j, Y' ); ?>
		</time> <!-- CS-content-date -->

	</div>

</article>