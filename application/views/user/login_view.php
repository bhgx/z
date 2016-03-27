<div class="login-content">
	<div class="form-group">
		<input id="username" name="username" type="text" class="form-control" placeholder="账号">
	</div>
	<div class="form-group">
		<input id="password" name="password" type="password" class="form-control" placeholder="密码">
	</div>
	<div class="form-group">
		<a id="login" class="btn btn-block btn-success disabled">登录</a>
	</div>
</div>
<?php $this->load->view('template/scripts'); ?>
<script type="text/javascript">
	var baseUrl = '<?php echo site_url(); ?>';
	$(function(){
		var $login = $('#login'),
			$loginForm = $('#loginForm');
		$('#username,#password').on('keyup', function(){
			var un = $.trim($('#username').val()),
				pwd = $.trim($('#password').val());
			if (un && pwd) {
				$login.removeClass('disabled');
			} else {
				$login.addClass('disabled');
			}
		});
		$login.on('click', function(event){
			if($login.hasClass('disabled')){
				return false;
			} 
			var param = {
				username: $.trim($('#username').val()),
				password: $.trim($('#password').val())
			};
			$.ajax({
				type: 'post',
				url: baseUrl+'/user/check',
				data: param,
				success: function(result){
					location.href = baseUrl + '/sale/lists';
				},
				error: function(err){
					alert(err.responseText);
				}

			});
		});
	});
</script>
