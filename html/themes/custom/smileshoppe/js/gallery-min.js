!function(e){"use strict";Drupal.behaviors.smileshoppe_gallery={attach:function(i,a){e("#block-views-block-gallery-gallery",i).once("gallery-setup").each(function(i){var a=e(this),t=a.find(".item-list .type-gallery-image"),r=a.find(".item-list-wrapper");t.each(function(i){var a,t,s;a=e(this),t=a.find(".before"),s=a.find(".after"),t.css("background-image","url("+t.find("img").attr("src")+")"),s.css("background-image","url("+s.find("img").attr("src")+")"),t.empty(),s.empty(),a.addClass("init"),e(this).appendTo(r)}),a.find(".item-list").remove(),a.addClass("ready")})}}}(jQuery);