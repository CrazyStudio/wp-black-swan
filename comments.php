<?php if ( comments_open() ) : ?>
<div class="post-comments small-8 small-centered columns" id="comments_wrapper">
	
	<?php 



		if ( comments_open() ) :
		echo '<div class="comment-header clearfix">';
		echo '<h4 class="block-heading small-6 columns">';
		comments_number(__('<span class="comment-number">0</span> <span class="comment-header">Comments</span>','solopine'), __('<span class="comment-number">1</span> <span class="comment-header">Comment</span>','solopine'), '<span class="comment-number">%</span>' . __('<span class="comment-header">Comments</span>','solopine') );
		echo '</h4>';
		echo '<h4 class="comment-toggle small-6 columns">';
		echo 'Add your own';
		echo '<div class="comment-toggle-border">';
		echo '<svg id="comment-toggle-icon" class="comment-toggle-icon">';
		echo '<use xlink:href="#icon-comment-toggle"></use>';
		echo '</svg>';
		echo '</div>';
		echo '</h4>';
		echo '</div>';
		endif;

		$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout

		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> __('Leave a Reply', 'solopine'),
			'cancel_reply_link'		=> __('Cancel Reply', 'solopine'),
			'label_submit'			=> __('Post Comment', 'solopine')
		));

		echo "<div class='comments small-12 small-centered columns'>";
		
			wp_list_comments(array(
				'avatar_size'	=> 50,
				'max_depth'		=> 5,
				'style'			=> 'ul',
				'callback'		=> 'black_swan_comments',
				'type'			=> 'all'
			));

		echo "</div>";

		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		
	 ?>


</div> <!-- end comments div -->
<?php endif; ?>