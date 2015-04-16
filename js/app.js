// No-conflict wrap ref: https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers
jQuery(document).ready(function($) {
	//$( document ).foundation();

	var icon_grid = document.getElementById( "main-button" );
	var animation_to_close = document.getElementById( "animation-to-close" );
	var animation_to_explore = document.getElementById( "animation-to-explore" );

	// Make the navigation toggle button work
	$( "#site-navigation-toggle" ).on( "click", function() {

		// Open and close the navigation
		if ($( "#site-navigation" ).hasClass( "toggle" )) {
			$( "#site-navigation" ).removeClass( "toggle" );
		} else {
			$( "#site-navigation" ).addClass( "toggle" );
		}

		//Change the text of the toggle title
		if ($( "#toggle-title" ).text() === "Explore" ) {
			$( "#toggle-title" ).text($( "#toggle-title" ).data( "close" ));
		} else {
			$( "#toggle-title" ).text($( "#toggle-title" ).data( "open" ));
		}

		// Animate the menu button
		if ( icon_grid.classList.contains( "js-css-toggle-animation" ) ) {
	    icon_grid.classList.remove( "js-css-toggle-animation" );
	    animation_to_explore.beginElement();
	  	} else {
	    icon_grid.classList.add( "js-css-toggle-animation" );
	    animation_to_close.beginElement();
		}

		// Fix a bugg in scroll function when the menu is to high (on weed...)
		if ($( ".header-fixed" ).css( "bottom" ) === "auto" ) {
			$( ".header-fixed" ).css( "bottom", "0px" );
		} else {
			$( ".header-fixed" ).css( "bottom", "auto" );
		}
	});	
});