
(function($){
	$(document).ready(function(){
		$('#wp-quotes').show();
		$("body").addClass("quote-shown");
		// setTimeout(function(){
		// 	$('#wp-quotes').fadeOut( "slow" );
		// }, 8000);
		var _countDownNumber = 0;
		var countDown = function(countDownNumber){
			if (countDownNumber >= 5){
				$('#wp-quotes .countdown').hide(function(){
					$('#wp-quotes .continue-button').css('display', 'inline-block');
				});
				return;
			}
			countDownNumber++;
			$('#wp-quotes .countdown .lead span.count').text(countDownNumber);
			setTimeout(countDown,1000, countDownNumber);
		}
		setTimeout(countDown, 1000, _countDownNumber);
		$(document).on('click', '.continue-button', function(e){
			$("body").removeClass("quote-shown");
			$('#wp-quotes').fadeOut( "slow" );
		});
	});
})(jQuery);