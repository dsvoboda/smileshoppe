!function(e){"use strict";Drupal.behaviors.smileshoppe_menu={attach:function(a,n){var s;(s=e("#block-smileshoppe-main-menu .menu-main")).once("menu-processed").each(function(a){var n=e('<span class="portable-trigger">☰ Navigation</span>'),t=s.find("> li");t.once("li-processed").each(function(a){var n=e(this),s=n.find("a"),t=s.attr("title"),i=s.text();s.removeAttr("title"),s.empty(),s.append("<h4>"+i+"</h4>").append("<span>"+t+"</span>"),n.addClass("li-processed")}),e("body").prepend(n),s.addClass("menu-processed")})}}}(jQuery);