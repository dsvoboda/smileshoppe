(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_menu = {
		attach: function(context, settings) {
			setupMenu($('#block-smileshoppe-main-menu .menu-main'));
		}
	}
	
	function setupMenu($menu) {
		$menu.once('menu-processed').each(function(i) {
			var $trigger = $('<span class="portable-trigger">☰ Navigation</span>');
			var $items = $menu.find('> li');
			$items.once('li-processed').each(function(a) {
				var $li = $(this);
				var $a = $li.find('a');
				var title = $a.attr('title');
				var page_title = $a.text();
				$a.removeAttr('title');
				$a.empty();
				$a.append('<h4>' + page_title + '</h4>').append('<span>' + title + '</span>');
				$li.addClass('li-processed');
			});
			$('body').prepend($trigger);
			$trigger.click(function(e) {
				e.preventDefault();
				$('html').toggleClass('portable-nav-active');
				if($trigger.html() == "☰ Navigation") {
					$trigger.html("☰ Close");
				} else {
					$trigger.html("☰ Navigation");
				}
			});
			$menu.swipe( {
				swipeLeft:function(event, direction, distance, duration, fingerCount) {
					if(direction == "left"){
						event.preventDefault();
						$('html').removeClass('portable-nav-active');
						$trigger.html("☰ Navigation");
					}
				},
				fingers:1,
				threshold:10,
				excludedElements: 'button, input, select, textarea, .noswipe'
			});
			$menu.addClass('menu-processed');
		});
	}
	
}(jQuery));
