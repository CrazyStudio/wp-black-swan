<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #site-content div and all content after
 *
 * @package Black Swan
 */
?>
</div> <!-- site-content: Found bottom of header.php -->

<footer id="site-footer" class="site-footer">
	
	<section class="footer-widgetarea row">
		
		<div class="footer-widget large-6 columns">
			<h3 class="widget-title">About</h3>
			<p>This attention to details requires discipline. There is no room for sloppiness, for carelessness, for procrastination. Every detail is important because the end result is the sum of all the details involved in the creative process no matter what we are doing. There are no hierarchies when it comes to quality. Quality is there or is not there, and if is not there we have lost our time.</p>

			<a href="">Buy This Theme</a>
		</div>

		<div class="footer-widget large-3 large-offset-1 columns">
			<h3 class="widget-title">Categories</h3>
			<ul>
				<li>Happiness</li>
				<li>Lifestyle</li>
				<li>Travel</li>
				<li>Design</li>
				<li>Music</li>
			</ul>
		</div>

		<div class=" footer-widget large-2 columns">
			<h3 class="widget-title">Social</h3>
			<ul>
				<li>Instagram</li>
				<li>Facebook</li>
				<li>Youtube</li>
				<li>Twitter</li>
				<li>Tumblr</li>
			</ul>
		</div>
	</section> <!-- Footer-widgetarea -->

	<section class="footer-copy row">

		<div class="copy-body small-10 columns">
			<copy>Copyright © 2015 Black Swan. All rights reserved.</copy>
		</div>

		<div class="copy-extra small-2 columns">
			<button class="copy-extra-button">
			<span class="copy-extra-body">Top</span>
				<svg id="CS-icon-arrow" class="CS-icon-arrow">
					<use xlink:href="#icon-footer-arrow">
					</use>
				</svg>
			</button>
		</div>
	</section> <!-- footer-copy -->

</footer> <!-- site-footer -->

<?php wp_footer(); ?>

</body>
</html>