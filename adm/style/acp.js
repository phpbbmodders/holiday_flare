(function($) {
	'use strict';
	var status = $('#holidayflare-status');
	$('.holiday-select').on('change', function() {
		var messages = [];
		if (this.value !== '') {
			var position = $(this).attr('data-placement');
			$('.holiday-select').not(this).filter(function() {
				return this.value !== '' && $(this).attr('data-placement') === position;
			}).each(function() {
				var select = $(this);
				var holiday = select.closest('fieldset').find('legend').text();
				var placement = select.closest('dl').find('label').text();
				messages.push(status.attr('data-cleared-message')
					.replace('%1$s', holiday).replace('%2$s', placement));
				select.val('');
			});
		}
		status.text(messages.join(' '));
	});
	$('#select_victim').on('reset', function() {
		status.empty();
	});
})(jQuery);
