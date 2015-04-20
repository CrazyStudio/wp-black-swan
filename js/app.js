// No-conflict wrap ref: https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers
jQuery(document).ready(function($) {
	//$( document ).foundation();

	var icon_grid = document.getElementById( "toggle-icon" );
	var animation_to_close = document.getElementById( "animation-to-close" );
	var animation_to_explore = document.getElementById( "animation-to-explore" );
	
	// add class to site-menu
	$( "#primary-menu > li" ).addClass( "medium-3 columns" );

	// add .end class to last menu item
	$( '#primary-menu > li' ).last().addClass('end');

	// add offset depending on how many menu-items
	if($( "#primary-menu > li" ).length === 1 ) {

		$( "#primary-menu > li:first" ).addClass( "menu-offset-1-item" );

	} else if ($( "#primary-menu > li" ).length === 2 ) {

		$( "#primary-menu > li:first" ).addClass( "menu-offset-2-item" );

	} else if ($( "#primary-menu > li" ).length === 3 ) {

		$( "#primary-menu > li:first" ).addClass( "menu-offset-3-item" );

	} else {
	}

	// Make the navigation toggle button work
	$( "#site-navigation-toggle" ).on( "click", function() {

		// Open and close the navigation
		if ($( "#site-navigation" ).hasClass( "js-css-toggle" )) {
			$( "#site-navigation" ).removeClass( "js-css-toggle" );
		} else {
			$( "#site-navigation" ).addClass( "js-css-toggle" );
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
		if ($( ".site-header-fixed" ).css( "bottom" ) === "auto" ) {
			$( ".site-header-fixed" ).css( "bottom", "0px" );
		} else {
			$( ".site-header-fixed" ).css( "bottom", "auto" );
		}
	});	
});