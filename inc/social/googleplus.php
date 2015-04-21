<?php
/**
 * Social button: Google Plus
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_googleplus_link		= $CS_redux['CS-googleplus'];
?>

<?php if(!empty($CS_googleplus_link)) : ?>
	<a class="social-icon" href="http://plus.google.com/<?php echo $CS_googleplus_link; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
<?php endif; ?>



