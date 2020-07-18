(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_gallery = {
		attach: function(context, settings) {
			$('#block-views-block-gallery-gallery', context).once('gallery-setup').each(function(i) {
				var $block = $(this);
				var $items = $block.find('.item-list .type-gallery-image');
				var $wrapper = $block.find('.item-list-wrapper');
				$items.each(function(a) {
					imageSetup($(this));
					$(this).appendTo($wrapper);
				});
				$block.find('.item-list').remove();
				$block.addClass('ready');
			});
		}
	}
	
	function imageSetup($elem) {
		var $before = $elem.find('.before');
		var $after = $elem.find('.after');
		$before.css('background-image','url(' + $before.find('img').attr('src') + ')');
		$after.css('background-image','url(' + $after.find('img').attr('src') + ')');
		$before.empty();
		$after.empty();
		$elem.addClass('init');
	}
	
}(jQuery));
