!function(e){"use strict";Drupal.behaviors.smileshoppe_gallery={attach:function(i,a){var r;(r=e("#block-views-block-gallery-gallery")).once("gallery-setup").each(function(i){var a=r.find(".item-list .type-gallery-image"),t=r.find(".item-list-wrapper");a.each(function(i){var a,r,s;a=e(this),r=a.find(".before"),s=a.find(".after"),r.css("background-image","url("+r.find("img").attr("src")+")"),s.css("background-image","url("+s.find("img").attr("src")+")"),r.empty(),s.empty(),a.addClass("init"),e(this).appendTo(t)}),r.find(".item-list").remove()}),r.addClass("ready")}}}(jQuery);