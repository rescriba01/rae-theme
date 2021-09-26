/* Regular jQuery */
$('.hideable').on('click', function() {
	$(this).hide();
})

/* Compatibility Mode */
jQuery('.hideable').on('click', function() {
	jQuery(this).hide();
})
