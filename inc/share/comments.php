<?php
/**
 * Share button: Comments (takes you to comments section).
 * 
 */
 if ( comments_open() ) : ?><a class="CS-share-icon" href="<?php echo esc_url( get_permalink() ) ; ?>#CS-comments-wrap"><i class="fa fa-comments"></i></a><?php endif; ?>