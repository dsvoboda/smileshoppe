!function(e){"use strict";Drupal.behaviors.smileshoppe_menu={attach:function(t,a){var n;(n=e("#block-smileshoppe-main-menu .menu-main")).once("menu-processed").each(function(t){var a=e('<span class="portable-trigger">☰ Navigation</span>'),s=n.find("> li");s.once("li-processed").each(function(t){var a=e(this),n=a.find("a"),s=n.attr("title"),i=n.text();n.removeAttr("title"),n.empty(),n.append("<h4>"+i+"</h4>").append("<span>"+s+"</span>"),a.addClass("li-processed")}),e("body").prepend(a),a.click(function(t){t.preventDefault(),e("html").toggleClass("portable-nav-active"),"☰ Navigation"==a.html()?a.html("☰ Close"):a.html("☰ Navigation")}),n.swipe({swipeLeft:function(t,n,s,i,l){"left"==n&&(t.preventDefault(),e("html").removeClass("portable-nav-active"),a.html("☰ Navigation"))},fingers:1,threshold:10,excludedElements:"button, input, select, textarea, .noswipe"}),n.addClass("menu-processed")})}}}(jQuery);