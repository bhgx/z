$(function(){

	var $body = $('body'),
		$header = $('#header'),
		$aside = $('#aside');
	$(window).on('scroll', function(){
		if ($body.scrollTop() > 20) {
			$header.addClass('header-bg');
		} else {
			$header.removeClass('header-bg');
		}

		if ($body.scrollLeft() > 20) {
			$aside.addClass('aside-bg');
		} else {
			$aside.removeClass('aside-bg');
		}
	});
});