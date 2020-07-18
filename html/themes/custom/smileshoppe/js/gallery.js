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
		$wrapper.append($('<div />', {
			'class' : 'next'
		}));
		$wrapper.append($('<div />', {
			'class' : 'prev'
		}));
		$wrapper.attr('data-index',$wrapper.find(':first-child').attr('data-id'));
		$wrapper.find('[data-id="' + $wrapper.attr('data-index') + '"]').addClass('active');
		$wrapper.find('.next').click(function(e) {
			e.preventDefault();
			$wrapper.find('.type-gallery-image').removeClass('active');
			var next = parseInt($images.indexOf($wrapper.attr('data-index')) + 1);
			if(next < $images.length) {
				$wrapper.find('[data-id="' + $images[next] + '"]').addClass('active');
			} else {
				$wrapper.find('[data-id="' + $images[0] + '"]').addClass('active');
			}
			$wrapper.attr('data-index',$wrapper.find('.active').attr('data-id'));
		});
		$wrapper.find('.prev').click(function(e) {
			e.preventDefault();
			$wrapper.find('.type-gallery-image').removeClass('active');
			var prev = parseInt($images.indexOf($wrapper.attr('data-index')) - 1);
			if(prev > -1) {
				$wrapper.find('[data-id="' + $images[prev] + '"]').addClass('active');
			} else {
				$wrapper.find('[data-id="' + $images[$images.length] + '"]').addClass('active');
			}
			$wrapper.attr('data-index',$wrapper.find('.active').attr('data-id'));
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
