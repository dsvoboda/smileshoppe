(function ($,ss_) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_employees = {
		attach: function(context, settings) {
			$('#block-views-block-employees-employees').once('anchors').each(function(i) {
				ss_.gatedAnchors($(this));
			});
		}
	}
	
	
}(jQuery,ss_));
