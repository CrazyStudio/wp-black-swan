<?php
/**
 * Social button: Youtube
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_youtube_link		= $CS_redux['CS-youtube'];
?>

<?php if(!empty($CS_youtube_link)) : ?>
	<a class="social-icon" href="http://youtube.com/<?php echo $CS_youtube_link; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
<?php endif; ?>