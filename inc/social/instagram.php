<?php
/**
 * Social button: Instagram
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_instagram_link		= $CS_redux['CS-instagram'];
?>

<?php if(!empty($CS_instagram_link)) : ?>
	<a class="social-icon" href="http://instagram.com/<?php echo $CS_instagram_link; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
<?php endif; ?>



