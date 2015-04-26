// No-conflict wrap ref: https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers
jQuery(document).ready(function($) {
	//$( document ).foundation();

	var icon_grid = document.getElementById( "CS-toggle-icon" );
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

	if($ (".CS-related-item").length === 1 ) {
		$( ".CS-related-item" ).addClass( "menu-offset-1-item" );
	} else if ($( ".CS-related-item" ).length === 2 ) {
		$( ".CS-related-item:first-child" ).addClass( "medium-offset-2" );
	} else {
		
	}


	// Make the navigation toggle button work
	$( "#CS-site-navigation-toggle" ).on( "click", function() {

		// Open and close the navigation
		if ($( "#CS-site-navigation" ).hasClass( "js-css-toggle" )) {
			$( "#CS-site-navigation" ).removeClass( "js-css-toggle" );
		} else {
			$( "#CS-site-navigation" ).addClass( "js-css-toggle" );
		}

		//Change the text of the toggle title
		if ($( "#CS-toggle-title" ).text() === "Explore" ) {
			$( "#CS-toggle-title" ).text($( "#CS-toggle-title" ).data( "close" ));
		} else {
			$( "#CS-toggle-title" ).text($( "#CS-toggle-title" ).data( "open" ));
		}

		// Animate the menu button
		if ( icon_grid.classList.contains( "js-css-toggle-animation" ) ) {
	    icon_grid.classList.remove( "js-css-toggle-animation" );
	    animation_to_explore.beginElement();
	  	} else {
	    icon_grid.classList.add( "js-css-toggle-animation" );
	    animation_to_close.beginElement();
		}

		// Fix a bugg in scroll function when the menu is to high 
		if ($( ".CS-site-header-fixed" ).css( "bottom" ) === "auto" ) {
			$( ".CS-site-header-fixed" ).css( "bottom", "0px" );
		} else {
			$( ".CS-site-header-fixed" ).css( "bottom", "auto" );
		}
	});	

	$( "#respond" ).addClass( "js-css-comments" );

	$( ".CS-comment-toggle-border" ).on( "click", function() {

		if ($( "#respond" ).hasClass( "js-css-comments" )) {
			$( "#respond" ).removeClass( "js-css-comments" );

			
			var scroll_to_respond = (($("#respond").offset().top) - 100);

			$('html, body').animate({
			        scrollTop: scroll_to_respond
			    }, 1500);
		} else {
			$( "#respond" ).addClass( "js-css-comments" );
		}

	});	













});










