(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_gallery = {
		attach: function(context, settings) {
			$('#block-views-block-gallery-gallery').once('gallery-setup').each(function(i) {
				setupGallery($(this));
			});
		}
	}
	function setupGallery($block) {
		var $items = $('.item-list .type-gallery-image', context);
		var $wrapper = $('.item-list-wrapper', context);
		$items.each(function(a) {
			imageSetup($(this));
			$(this).appendTo($wrapper);
		});
		$('.item-list',context).remove();
		$block.addClass('ready');
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
