<?php
/**
 * Social button: Tumblr
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_tumblr_link		= $CS_redux['CS-tumblr'];
?>

<?php if(!empty($CS_tumblr_link)) : ?>
	<a class="social-icon" href="http://<?php echo $CS_tumblr_link; ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
<?php endif; ?>