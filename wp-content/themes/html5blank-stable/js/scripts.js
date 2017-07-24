(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// ajax function
		$(document).on('click','.loadbtn', function(){

			var that = $(this);
			var page = that.data('page');
			var newPage= page+1;
			var ajaxurl = that.data('url');
			//add animation to removetext
			that.addClass('loading') //.find('.text').slideUp(320);

			$.ajax({

				url : ajaxurl,
				type : 'post',
				data : {
					page : page,
					action : 'loadbtn'
				},
				error : function( response ){
					console.log(response);					
				},
				success : function( response ){
					that.data('page', newPage);
					$('.post-container').append( response );
					// that.removeClass('loading');
				}

			});


		});
		












		
	});
	
})(jQuery, this);
