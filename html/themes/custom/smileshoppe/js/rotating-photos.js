(function ($) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_rotating_photos = {
		attach: function(context, settings) {
			setupPhotos();
		}
	}
	
	function setupPhotos($block) {
		alert('rotating photos setup called');
	}
	
}(jQuery));
