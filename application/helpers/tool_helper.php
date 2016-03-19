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

	// selected
	function add_selected($s1, $s2){
		if($s1 == $s2) {
			echo 'selected';
		}
	}

 ?>