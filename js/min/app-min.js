jQuery(document).ready(function($){var e=document.getElementById("CS-toggle-icon"),t=document.getElementById("animation-to-close"),s=document.getElementById("animation-to-explore");$("#primary-menu > li").addClass("medium-3 columns"),$("#primary-menu > li").last().addClass("end"),1===$("#primary-menu > li").length?$("#primary-menu > li:first").addClass("menu-offset-1-item"):2===$("#primary-menu > li").length?$("#primary-menu > li:first").addClass("menu-offset-2-item"):3===$("#primary-menu > li").length&&$("#primary-menu > li:first").addClass("menu-offset-3-item"),$("#CS-site-navigation-toggle").on("click",function(){$("#CS-site-navigation").hasClass("js-css-toggle")?$("#CS-site-navigation").removeClass("js-css-toggle"):$("#CS-site-navigation").addClass("js-css-toggle"),$("#CS-toggle-title").text("Explore"===$("#CS-toggle-title").text()?$("#CS-toggle-title").data("close"):$("#CS-toggle-title").data("open")),e.classList.contains("js-css-toggle-animation")?(e.classList.remove("js-css-toggle-animation"),s.beginElement()):(e.classList.add("js-css-toggle-animation"),t.beginElement()),"auto"===$(".CS-site-header-fixed").css("bottom")?$(".CS-site-header-fixed").css("bottom","0px"):$(".CS-site-header-fixed").css("bottom","auto")}),$("#respond").addClass("js-css-comments"),$(".comment-toggle-border").on("click",function(){$("#respond").hasClass("js-css-comments")?($("#respond").removeClass("js-css-comments"),document.getElementById("#comment-header").scrollIntoView(!0)):($("#respond").addClass("js-css-comments"),document.getElementById("#comment-header").scrollIntoView(!0))})});