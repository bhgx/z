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
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>/check" method="post">
			<div class="form-group">
				<input name="username" type="text" class="form-control" placeholder="账号">
			</div>
			<div class="form-group">
				<input name="password" type="password" class="form-control" placeholder="密码">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-block btn-success">登录</button>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="<?php echo(base_url()) . 'resource/libs/jquery/jquery.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo(base_url()) . 'resource/libs/bootstrap/js/bootstrap.min.js' ?>"></script>
</body>
</html>