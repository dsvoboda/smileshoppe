!function(a){"use strict";var t=[];Drupal.behaviors.smileshoppe_gallery={attach:function(i,d){a(i).find(".item-list-wrapper").once("gallery-setup").each(function(i){var d;t=[],(d=a(this)).find(".type-gallery-image").each(function(i){var e,n,r;e=a(this),n=e.find(".before"),r=e.find(".after"),n.css("background-image","url("+n.find("img").attr("src")+")"),r.css("background-image","url("+r.find("img").attr("src")+")"),n.empty(),r.empty(),t.push(e.attr("data-id")),e.addClass("init"),a(this).appendTo(d)}),d.find(".item-list").remove(),d.append(a("<div />",{class:"next"})),d.append(a("<div />",{class:"prev"})),d.attr("data-index",d.find(":first-child").attr("data-id")),d.find('[data-id="'+d.attr("data-index")+'"]').addClass("active"),d.find(".next").click(function(a){a.preventDefault(),d.find(".type-gallery-image").removeClass("active");var i=parseInt(t.indexOf(d.attr("data-index"))+1);i<t.length?d.find('[data-id="'+t[i]+'"]').addClass("active"):d.find('[data-id="'+t[0]+'"]').addClass("active"),d.attr("data-index",d.find(".active").attr("data-id"))}),d.find(".prev").click(function(a){a.preventDefault(),d.find(".type-gallery-image").removeClass("active");var i=parseInt(t.indexOf(d.attr("data-index"))-1);i>-1?d.find('[data-id="'+t[i]+'"]').addClass("active"):d.find('[data-id="'+t[t.length]+'"]').addClass("active"),d.attr("data-index",d.find(".active").attr("data-id"))}),a("#block-views-block-gallery-gallery").addClass("ready")})}}}(jQuery);