<?php 
	class vars {  
	    var $CI;  
	    function vars(){  
	        $this->CI =& get_instance();  
	        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查  
	        $variable = array(
	        	'global_user_roles' => array(
		        	1 => '超级管理员',
					2 => '皇冠会员', 
					3 => '钻石会员', 
					4 => '金牌会员', 
					5 => '银牌会员', 
					6 => '会员', 
					7 => '普通用户'
	        	),
	        	'global_user_status' => array(
	        		0 => '冻结',
					1 => '正常',
	        	)
	        );  

	        $this->CI->load->vars($variable);  
	    }  
	}  
	

 ?>