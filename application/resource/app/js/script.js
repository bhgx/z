$(function(){

	var $body = $('body'),
		$header = $('#header');
	$(window).on('scroll', function(){
		if ($body.scrollTop() > 20) {
			$header.addClass('header-bg');
		} else {
			$header.removeClass('header-bg');
		}
	});
});