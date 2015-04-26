<?php
/**
 * Store SVG in a file that gets included at the top of header
 * 
 * You don't require new http request for SVG and those SVG inbedded in every html file.
 * You lose the ability to cache, but you can easily animate SVG and you don't have any flash
 * before and after the SVG are loaded. 
 *
 * All icons on the theme are stored here. A teknik recomended and use by Chris Coyier
 * 
 * @link https://css-tricks.com/svg-sprites-use-better-icon-fonts/     
 *
 * @uses header.php
 *
 */
?>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" enable-background="new 0 0 100 100" xml:space="preserve" style="display: none;">
<defs>

	<symbol id="icon-grid" viewBox="0 0 30 30">
		<title>Menu grid icon</title>
		<g>
			<path d="M22,22 L25.1758929,22 L28,22 L28,28 L22,28 L22,22 Z" id="dow-3"></path>
			<path d="M0,22 L3.87388393,22 L6,22 L6,28 L0,28 L0,22 Z" id="dow-1"></path>
			<path d="M22,0 L24.712995,0 L28,0 L28,6 L22,6 L22,0 Z" id="top-3"></path>
			<path d="M0,0 L3.28835404,0 L6,0 L6,6 L0,6 L0,0 Z" id="top-1"></path>
			<animate id="animation-to-close" begin="indefinite" fill="freeze" attributeName="opacity" dur="300ms" to="0"></animate>
			<animate id="animation-to-explore" begin="indefinite" fill="freeze" attributeName="opacity" dur="300ms" to="1"></animate>
		</g>
		<path d="M11,22 L13.1125388,22 L17,22 L17,28 L11,28 L11,22 Z" id="dow-2"></path>
		<path d="M22,11 L24.5763587,11 L28,11 L28,17 L22,17 L22,11 Z" id="mid-3"></path>
		<path d="M11,11 L14.716974,11 L17,11 L17,17 L11,17 L11,11 Z" id="mid-2"></path>
		<path d="M0,11 L3.20243595,11 L6,11 L6,17 L0,17 L0,11 Z" id="mid-1"></path>
		<path d="M11,0 L14.017139,0 L17,0 L17,6 L11,6 L11,0 Z" id="top-2"></path>
	</symbol>

	<symbol id="icon-comment-toggle" viewBox="0 0 30 30">
	  <title>Comment toggle icon</title>
		<path d="M16.5,22 L13.1125388,22 L11,22 L11,28 L16.5,28 L22,28 L22,22 L18.1125388,22 L16.5,22 Z M22,22 L25.1758929,22 L28,22 L28,28 L22,28 L22,22 Z" id="dow-3"></path>
			<path d="M0,22 L3.87388393,22 L6,22 L6,28 L0,28 L0,22 L0,22 Z" id="dow-1"></path>
			<path d="M16.5,0 L14.017139,0 L11,0 L11,6 L16.5,6 L22,6 L22,0 L19.017139,0 L16.5,0 Z M22,0 L24.712995,0 L28,0 L28,6 L22,6 L22,0 Z" id="top-3"></path>
			<path d="M0,0 L3.28835404,0 L6,0 L6,6 L0,6 L0,0 L0,0 Z" id="top-1"></path>
			<path d="M16.5,11 L14.716974,11 L11,11 L11,17 L16.5,17 L22,17 L22,11 L19.716974,11 L16.5,11 Z M22,11 L24.5763587,11 L28,11 L28,17 L22,17 L22,11 Z" id="mid-3"></path>
			<path d="M0,11 L3.20243595,11 L6,11 L6,17 L0,17 L0,11 L0,11 Z" id="mid-1"></path>
	</symbol>
	<symbol id="icon-facebook" viewBox="0 0 30 30">
		<path d="M959 1524v-264h-157q-86 0 -116 -36t-30 -108v-189h293l-39 -296h-254v-759h-306v759h-255v296h255v218q0 186 104 288.5t277 102.5q147 0 228 -12z"></path>
	</symbol>
</defs>
</svg>