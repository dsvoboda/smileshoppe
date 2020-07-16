(function ($,ss_) {
	'use strict';
	
	Drupal.behaviors.smileshoppe_employees = {
		attach: function(context, settings) {
			ss_.gatedAnchors($('#block-views-block-employees-employees'));
			alert('employees block loaded!');
		}
	}
	
	
}(jQuery,ss_));
