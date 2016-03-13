<div class="login-content">
	<form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>/check" method="post">
		<div class="form-group">
			<input id="username" name="username" type="text" class="form-control" placeholder="账号">
		</div>
		<div class="form-group">
			<input id="password" name="password" type="password" class="form-control" placeholder="密码">
		</div>
		<div class="form-group">
			<a id="login" class="btn btn-block btn-success disabled">登录</a>
		</div>
	</form>
</div>
<?php $this->load->view('template/scripts'); ?>
<script type="text/javascript">
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
			event.preventDefault()
			if($login.hasClass('disabled')){
				return false;
			} 
			$loginForm.submit();
		});
	});
</script>
