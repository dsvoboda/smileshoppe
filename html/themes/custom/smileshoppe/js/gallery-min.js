!function(a){"use strict";var t=[];Drupal.behaviors.smileshoppe_gallery={attach:function(i,e){a(i).find(".item-list-wrapper").once("gallery-setup").each(function(i){var e;t=[],(e=a(this)).find(".type-gallery-image").each(function(i){var d,n,r;d=a(this),n=d.find(".before"),r=d.find(".after"),n.css("background-image","url("+n.find("img").attr("src")+")"),r.css("background-image","url("+r.find("img").attr("src")+")"),n.empty(),r.empty(),t.push(d.attr("data-id")),d.addClass("init"),a(this).appendTo(e)}),e.find(".item-list").remove(),e.attr("data-index",e.find(":first-child").attr("data-id")),e.find('[data-id="'+e.attr("data-index")+'"]').addClass("active"),e.find(".next").click(function(a){a.preventDefault(),e.find(".type-gallery-image").removeClass("active");var i=parseInt(t.indexOf(e.attr("data-index"))+1);i<=t.length?e.find('[data-id="'+i+'"]').addClass("active"):e.find('[data-id="'+e.attr("data-index")+'"]').addClass("active"),e.attr("data-index",e.find(".active").attr("data-id"))}),e.find(".prev").click(function(a){a.preventDefault()}),a("#block-views-block-gallery-gallery").addClass("ready")})}}}(jQuery);