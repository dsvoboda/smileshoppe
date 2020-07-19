(function ($,ss_) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_services = {
		attach: function(context, settings) {
			$('#block-views-block-services-services').once('anchors').each(function(i) {
				ss_.gatedAnchors($(this));
			});
		}
	}
	
	
}(jQuery,ss_));
