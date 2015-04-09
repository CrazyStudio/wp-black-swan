// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

var icon_grid = document.getElementById("main-button");
var animationToGreen = document.getElementById("animation-to-green");
var animationToYellow = document.getElementById("animation-to-yellow");

$("#site-navigation-toggle").on( "click", function() {

	if($("#site-navigation").hasClass("toggle")) {
		$("#site-navigation").removeClass("toggle");
	} else {
		$("#site-navigation").addClass("toggle");
	}

	$("#site-header").animate({ 'min-height': "59px" }, '400', 'linear');

	if (icon_grid.classList.contains("js-css-toggle-animation")) {
    icon_grid.classList.remove("js-css-toggle-animation");
    animationToYellow.beginElement();
  	} else {
    icon_grid.classList.add("js-css-toggle-animation");
    animationToGreen.beginElement();
	}

});	

