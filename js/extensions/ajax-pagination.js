(function($) {
	$(document).on( 'click', '#load_more', function( event ) {
		event.preventDefault();

		var post_count = parseInt($('#post_count').text(), 10);
		var new_count =  post_count + 3;
		$('#post_count').text(new_count);

		$.ajax({
			url: ajaxpagination.ajaxurl,
			type: 'post',
			data: {
				action: 'ajax_pagination',
				post_count : new_count
			},
			success: function( html ) {
				$('#loaded_posts').remove();
				$('#posts').append( html );
			},
		})
	})
})(jQuery);