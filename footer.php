<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #site-content div and all content after
 *
 * @package Black Swan
 */
global $CS_redux;
?>
</div> <!-- site-content: Found bottom of header.php -->

<footer id="site-footer" class="site-footer">
	
	<section class="footer-widgetarea row">
		
		<div class="mq-footer-widget footer-widget small-10 medium-6  small-centered medium-uncentered columns">
			<h3 class="widget-title">About</h3>
			<p>This attention to details requires discipline. There is no room for sloppiness, for carelessness, for procrastination. Every detail is important because the end result is the sum of all the details involved in the creative process no matter what we are doing. There are no hierarchies when it comes to quality. Quality is there or is not there, and if is not there we have lost our time.</p>

			<a href="">Buy This Theme</a>
		</div>

		<div class="mq-footer-widget footer-widget small-5 medium-3 small-offset-1 medium-offset-0 large-offset-1 columns">
			<h3 class="widget-title">Categories</h3>
			<ul>
				<li><a href="#">Happiness</a></li>
				<li><a href="#">Lifestyle</a></li>
				<li><a href="#">Travel</a></li>
				<li><a href="#">Design</a></li>
				<li><a href="#">Music</a></li>
			</ul>
		</div>

		<div class="mq-footer-widget footer-widget small-4 medium-3 large-2 small-offset-1 medium-offset-0 end columns">
			<h3 class="widget-title">Social</h3>
			<ul>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Youtube</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Tumblr</a></li>
			</ul>
		</div>
	</section> <!-- Footer-widgetarea -->

	<section class="mq-footer-copy footer-copy row">

		<div class="copy-body small-12 small-centered medium-uncentered medium-7 columns">
			<copy>Copyright © 2015 Black Swan. All rights reserved.</copy>
		</div>

		<div class="copy-extra small-12 medium-5 columns">
			<ul class="copy-extra-list">
				<li class="copy-extra-item"><a href="">About</a></li>
				<li class="copy-extra-item"><a href="">Press Kit</a></li>
				<li class="copy-extra-item"><a href="">Contact</a></li>

			</ul>
		</div>
	</section> <!-- footer-copy -->

</footer> <!-- site-footer -->

<!-- <pre><?php print_r($CS_redux); ?></pre> -->

<?php wp_footer(); ?>

</body>
</html>