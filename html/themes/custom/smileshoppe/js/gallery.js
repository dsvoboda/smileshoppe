(function ($) {
	'use strict';
	
	var $images = [];
	
	Drupal.behaviors.smileshoppe_gallery = {
		attach: function(context, settings) {
			$(context).find('.item-list-wrapper').once('gallery-setup').each(function(i) {
				$images = [];
				setupGallery($(this));
			});
		}
	}
	
	function setupGallery($wrapper) {
		var $items = $wrapper.find('.type-gallery-image');
		$items.each(function(a) {
			imageSetup($(this));
			$(this).appendTo($wrapper);
		});
		$wrapper.find('.item-list').remove();
		$wrapper.attr('data-index',$wrapper.find(':first-child').attr('data-id'));
		$wrapper.find('[data-index="' + $wrapper.attr('data-index') + '"]').addClass('active');
		$wrapper.find('.next').click(function(e) {
			e.preventDefault();
			$wrapper.find('.type-gallery-image').removeClass('active');
			var next = parseInt($images.indexOf($wrapper.attr('data-index')) + 1);
			if(next <= $images.length) {
				$wrapper.find('[data-index="' + next + '"]').addClass('active');
			} else {
				$wrapper.find('[data-index="' + $wrapper.attr('data-index') + '"]').addClass('active');
			}
		});
		$wrapper.find('.prev').click(function(e) {
			e.preventDefault();
		});
		$('#block-views-block-gallery-gallery').addClass('ready');
	}
	
	function imageSetup($elem) {
		var $before = $elem.find('.before');
		var $after = $elem.find('.after');
		$before.css('background-image','url(' + $before.find('img').attr('src') + ')');
		$after.css('background-image','url(' + $after.find('img').attr('src') + ')');
		$before.empty();
		$after.empty();
		$images.push($elem.attr('data-id'));
		$elem.addClass('init');
	}
	
}(jQuery));
