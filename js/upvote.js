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
			$(this).find('img').attr("src", "http://advertisers.io/wp-content/themes/advertisers/img/upvote.png")
		});

	});
})(jQuery);