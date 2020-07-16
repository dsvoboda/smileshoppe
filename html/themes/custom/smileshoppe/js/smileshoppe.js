var ss_ = (function($,smileshoppe_) {
	
	var smileshoppe_ = {};
	
	smileshoppe_.gatedAnchors = function($parent_list) {
		$parent_list.once('list-data-processed').each(function(i) {
			var $subnav = $('.page-content .subnav');
			var $list_content = $parent_list.find('.item-list > li > div');
			if($list_content.length > 0) {
				$subnav.append($('<ul />'));	
			} else {
				return false;
			}
			$list_content.once('indexed').each(function(a) {
				var $content = $(this);
				var $title = $content.find('> h2:first-child');
				var title = $title.text();
				var id = title.replace(/ +/g, '-').toLowerCase();
				$subnav.find('ul').append($('<li />', {
					'html' : '<a href="#' + id + '">' + title + '</a>'
				}));
				$title.attr('id',id);
			});
			alert('smileshoppe utilities called!');
		});
		return true;
	}
	
	
	return smileshoppe_;
	
}(jQuery,ss_));