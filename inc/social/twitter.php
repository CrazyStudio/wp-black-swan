<?php
/**
 * Social button: Twitter
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_twitter_link		= $CS_redux['CS-twitter'];
?>

<?php if(!empty($CS_twitter_link)) : ?>
	<a class="social-icon" href="http://twitter.com/<?php echo $CS_twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
<?php endif; ?>