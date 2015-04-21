<?php
/**
 * Social button: RSS
 *
 * @package Black Swan
 */
global $CS_redux;
$CS_rss_link		= $CS_redux['CS-rss'];
?>

<?php if(!empty($CS_rss_link)) : ?>
	<a class="social-icon" href="<?php echo $CS_rss_link; ?>" target="_blank"><i class="fa fa-rss"></i></a>
<?php endif; ?>