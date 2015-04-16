<?php if(has_post_thumbnail()) : ?>
    <div class="standard-feature">
    	<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	</div>
<?php endif; ?>