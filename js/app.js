// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

var icon_grid = document.getElementById("main-button");
var animationToGreen = document.getElementById("animation-to-green");
var animationToYellow = document.getElementById("animation-to-yellow");
var text = $('#toggle-title');

$("#site-navigation-toggle").on( "click", function() {

	// Open and close the navigation
	if($("#site-navigation").hasClass("toggle")) {
		$("#site-navigation").removeClass("toggle");
	} else {
		$("#site-navigation").addClass("toggle");
	}

	//Change the text of the toggle
	if($("#toggle-title").text() === "Explore" ) {

		$("#toggle-title").text($("#toggle-title").data("close"));
	} else {
		$("#toggle-title").text($("#toggle-title").data("open"));
	}

	// Animate the menu button
	if (icon_grid.classList.contains("js-css-toggle-animation")) {
    icon_grid.classList.remove("js-css-toggle-animation");
    animationToYellow.beginElement();
  	} else {
    icon_grid.classList.add("js-css-toggle-animation");
    animationToGreen.beginElement();
	}

	// Fix a bugg in scroll function when the menu is to high (on weed...)
	if($(".header-fixed").css("bottom") === "auto") {
		$(".header-fixed").css("bottom", "0px")
	} else {
		$(".header-fixed").css("bottom", "auto")
	}
});	