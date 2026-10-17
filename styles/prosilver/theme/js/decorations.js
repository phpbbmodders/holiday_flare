(function($) {
	'use strict';
	$('#holiday-flare-corner').prependTo('#site-description');
	$('#holiday-flare-center-top, #holiday-flare-center-bottom, #holiday-flare-center').prependTo('#page-header .headerbar').parent().addClass('holiday-flare-header');
	$('#holiday-flare-forum').removeAttr('id').insertBefore('.forabg, .forumbg');
	$('#holiday-flare-source').remove();
})(jQuery);
