(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_gallery = {
		attach: function(context, settings) {
			setupGallery($('#block-views-block-gallery-gallery'));
		}
	}
	
	function setupGallery($block) {
		$block.once('gallery-setup').each(function(i) {
			var $items = $block.find('.item-list .type-gallery-image');
			var $wrapper = $block.find('.item-list-wrapper');
			$items.each(function(a) {
				imageSetup($(this));
				$(this).appendTo($wrapper);
			});
			$block.find('.item-list').remove();
		});
	}
	
	function imageSetup($elem) {
		var $before = $elem.find('.before');
		var $after = $elem.find('.after');
		$before.attr('background-image','url(' + $before.find('img').attr('src') + ');');
		$after.attr('background-image','url(' + $after.find('img').attr('src') + ');');
		$elem.remove('img');
		$elem.addClass('init');
	}
	
}(jQuery));
