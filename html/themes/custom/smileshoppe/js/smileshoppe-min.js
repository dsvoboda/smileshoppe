var ss_=function(e,t){return{gatedAnchors:function(t){return t.once("list-data-processed").each(function(n){var i=e(".page-content .subnav"),a=t.find(".item-list > li > div");if(!(a.length>0))return!1;i.append(e("<ul />")),a.once("indexed").each(function(t){var n=e(this).find("> h2:first-child"),a=n.text(),r=a.replace(/ +/g,"-").toLowerCase();i.find("ul").append(e("<li />",{html:'<a href="#'+r+'">'+a+"</a>"})),n.attr("id",r)}),alert("smileshoppe utilities called!")}),!0}}}(jQuery);