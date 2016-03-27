$(function(){

	//header 和 side 固定
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

	/*
	 * 非空校验
	 * submitId: 点击按钮的ID
	 * inputArray: 需要进行验证的输入框ID的数组
	 * formId: 表单ID
	 */

	window.valid = function(options) {
		$('#' + options.submitId).on('click', function(event){
			event.preventDefault();
			var flag = true;
			for (var i = 0; i< options.inputArray.length; i++){

				if ($.trim($('#' + options.inputArray[i]).val()) == ''){

					flag = false;
				}
			}

			if(flag){
				console.log($('#'+options.formId))
				$('#'+options.formId).submit();
			} else {
				alert('请输入完整的信息');
			}

		});
	}
});