<?php 
	// 提示信息
	function alert($msg){
		echo '<script>alert("'.$msg.'")</script>';
	}

	// current
	function add_current($current_url, $u){
		if($current_url == $u) {
			echo 'current';
		}
	}

 ?>