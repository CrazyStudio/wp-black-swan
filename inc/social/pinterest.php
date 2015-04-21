<?php
/**
 * Social button: pinterest
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_pinterest_link		= $CS_redux['CS-pinterest'];
?>

<?php if(!empty($CS_pinterest_link)) : ?>
	<a class="social-icon" href="http://pinterest.com/<?php echo $CS_pinterest_link; ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
<?php endif; ?>