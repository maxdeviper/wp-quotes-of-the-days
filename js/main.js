
(function($){
	$(document).ready(function(){
		if ($('#wp-quotes-template').length > 0){
		    $('body').append($('#wp-quotes-template').html());
		    $('#wp-quotes').show();
			$("body").addClass("quote-shown");
			var _countDownNumber = 5;

			$('#wp-quotes .countdown .lead span.count').text(_countDownNumber);
			var countDown = function(countDownNumber){
				if (countDownNumber <= 1){
					$('#wp-quotes .countdown').hide(function(){
						$('#wp-quotes .continue-button').css('display', 'inline-block');
					});
					return;
				}
				countDownNumber--;
				$('#wp-quotes .countdown .lead span.count').text(countDownNumber);
				setTimeout(countDown,1000, countDownNumber);
			}
			setTimeout(countDown, 1000, _countDownNumber);
			$(document).on('click', '.continue-button', function(e){
				$("body").removeClass("quote-shown");
				$('#wp-quotes').fadeOut( "slow" );
			});
			
		}
		// setTimeout(function(){
		// 	$('#wp-quotes').fadeOut( "slow" );
		// }, 8000);
	});
})(jQuery);