(function($) {
	'use strict';
	$('.holiday-select').on('change', function() {
		if (this.value !== '') {
			var position = $(this).attr('data-placement');
			$('.holiday-select').not(this).filter(function() {
				return $(this).attr('data-placement') === position;
			}).val('');
		}
	});
})(jQuery);
