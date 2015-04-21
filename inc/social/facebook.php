<?php
/**
 * Social button: Facebook
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_facebook_link		= $CS_redux['CS-facebook'];
?>

<?php if(!empty($CS_facebook_link)) : ?>
	<a class="social-icon" href="http://facebook.com/<?php echo $CS_facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
<?php endif; ?>