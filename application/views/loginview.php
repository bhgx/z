<?php 
	$this->load->helper('url')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<base href="<?php echo base_url() ?>">
	<link rel="stylesheet" href="<?php echo(base_url()) . 'resource/libs/bootstrap/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo(base_url()) . 'resource/app/css/style.css' ?>">
</head>
<body class="login-body">
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
	<script type="text/javascript" src="<?php echo(base_url()) . 'resource/libs/jquery/jquery.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo(base_url()) . 'resource/libs/bootstrap/js/bootstrap.min.js' ?>"></script>
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
</body>
</html>