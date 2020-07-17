(function ($) {
	'use strict';
	
	var interval;
	
	Drupal.behaviors.smileshoppe_rotating_photos = {
		attach: function(context, settings) {
			setupPhotos($('#block-views-block-rotating-photos-block-1'));
		}
	}
	
	function setupPhotos($block) {
		$block.once('rotating-photos').each(function(i) {
			var $wrapper = $block.find('.item-list-wrapper');
			var $item_list = $wrapper.find('.item-list');
			var $items = $item_list.find('img');
			$items.each(function(a) {
				var $item = $(this);
				if(a == 0) {
					var $clone = $item.clone();
					$clone.appendTo($wrapper);
					$clone.addClass('sentinel');
				}
				$item.addClass('init').appendTo($wrapper);
				$item_list.remove();
			});
			$block.addClass('rotate-init');
			startRotation($block);
		});
	}
	
	function startRotation($block) {
		interval = setInterval(shuffle, 1000);
		
		function shuffle() {
			var $i = $block.find('img.init:last-child');
			$i.addClass('ninja-vanish');
			setTimeout(function() {
				$i.insertAfter($block.find('img.sentinel'));
				$i.removeClass('ninja-vanish');
			}, 500);
		}
	}
	
}(jQuery));
