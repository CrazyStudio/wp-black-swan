jQuery(document).ready(function($){var e=document.getElementById("toggle-icon"),t=document.getElementById("animation-to-close"),s=document.getElementById("animation-to-explore");$("#primary-menu > li").addClass("medium-3 columns"),$("#primary-menu > li").last().addClass("end"),1===$("#primary-menu > li").length?$("#primary-menu > li:first").addClass("menu-offset-1-item"):2===$("#primary-menu > li").length?$("#primary-menu > li:first").addClass("menu-offset-2-item"):3===$("#primary-menu > li").length&&$("#primary-menu > li:first").addClass("menu-offset-3-item"),$("#site-navigation-toggle").on("click",function(){$("#site-navigation").hasClass("js-css-toggle")?$("#site-navigation").removeClass("js-css-toggle"):$("#site-navigation").addClass("js-css-toggle"),$("#toggle-title").text("Explore"===$("#toggle-title").text()?$("#toggle-title").data("close"):$("#toggle-title").data("open")),e.classList.contains("js-css-toggle-animation")?(e.classList.remove("js-css-toggle-animation"),s.beginElement()):(e.classList.add("js-css-toggle-animation"),t.beginElement()),"auto"===$(".site-header-fixed").css("bottom")?$(".site-header-fixed").css("bottom","0px"):$(".site-header-fixed").css("bottom","auto")})});