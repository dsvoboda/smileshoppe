(function ($,ss_) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_employees = {
		attach: function(context, settings) {
			$('#block-views-block-employees-employees').once('anchors').each(function(i) {
				alert('employees block loaded!');
				ss_.gatedAnchors($(this));
			});
		}
	}
	
	
}(jQuery,ss_));
