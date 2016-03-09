<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog View</title>
</head>
<body>
	<p>Welcome to blog</p>
	<div><?php echo $name ?></div>
	<div><?php echo $age ?></div>
	<div>
		<?php foreach ($children as $key => $value) { ?>
			<h2 href=""><?php echo $key ?></h2>	
			<p><?php echo $value ?></p>
		<?php } ?>
	</div>
</body>
</html>