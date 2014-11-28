/* global ajaxurl, jQuery */
(function($){
	'use strict';

	$(function(){

		$('.upvote-ajax').on('click', function(e) {
			e.preventDefault();
			$.get( ajaxurl, $(this).attr('href').split('?')[1], function( resp ) {
				if ( /^https?:\/\//.test( resp ) ) {
					window.location.href = resp;
				}
			} );
			// $(this).find('img').fadeOut();
			$(this).find('img').attr("src", "../img/upvoted.png")
		});

	});
})(jQuery);