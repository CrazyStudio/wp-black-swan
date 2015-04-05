// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

var icon_grid = document.getElementById("main-button");
var animationToGreen = document.getElementById("animation-to-green");
var animationToYellow = document.getElementById("animation-to-yellow");

$("#site-navigation-toggle").on( "click", function() {

	$("#site-navigation").toggle();

	if (icon_grid.classList.contains("toggle-animation")) {
    icon_grid.classList.remove("toggle-animation");
    animationToYellow.beginElement();
  	} else {
    icon_grid.classList.add("toggle-animation");
    animationToGreen.beginElement();
	}

});



if (document.getElementById('top-3') != null) {
    var str = document.getElementById("top-3").value;
    alert("Hello! I am an alert box!!");
}
else {
    var str = null;
    alert("Hello! I am an alert box!!!!!!!!!!!!!!!");
}