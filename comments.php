<?php if ( comments_open() ) : ?>
<div class="CS-comments small-8 small-centered columns" id="CS-comments-wrap">
	
	<?php 
		if ( comments_open() ) :
		echo '<div id="CS-comments-header" class="CS-comments-header clearfix">';
		echo '<h4 class="small-6 columns">';
		comments_number(__('<span class="CS-comments-number">0</span> <span class="CS-comments-header-title">Comments</span>','solopine'), __('<span class="CS-comments-number">1</span> <span class="CS-comments-header-title">Comment</span>','solopine'), '<span class="CS-comments-number">%</span>' . __('<span class="CS-comments-header-title">Comments</span>','solopine') );
		echo '</h4>';
		echo '<h4 class="CS-comment-toggle small-6 columns">';
		echo 'Add your own';
		echo '<div class="CS-comment-toggle-border">';
		echo '<svg class="CS-comment-toggle-icon">';
		echo '<use xlink:href="#icon-comment-toggle"></use>';
		echo '</svg>';
		echo '</div>';
		echo '</h4>';
		echo '</div>';
		endif;

		$custom_comment_field = '<p class="CS-comment-form-comment"><textarea class="CS-comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout

		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> __('Leave a Reply', 'black-swan'),
			'cancel_reply_link'		=> __('Cancel Reply', 'black-swan'),
			'label_submit'			=> __('Post Comment', 'black-swan')
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