(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_menu = {
		attach: function(context, settings) {
			setupMenu($('.sidebar .menu-main'));
		}
	}
	
	function setupMenu($menu) {
		$menu.once('menu-processed').each(function(i) {
			var $li = $menu.find('> li');
			$li.once('li-processed').each(function(a) {
				var $a = $li.find('a');
				var title = $a.attr('title');
				var page_title = $a.text();
				$a.removeAttr('title');
				$a.empty();
				$a.append('<h4>' + page_title + '</h4>').append('<span>' + title + '</span>');
			});
		});
	}
	
}(jQuery));
