<?php 
	class vars {  
	    var $CI;  
	    function vars(){  
	        $this->CI =& get_instance();  
	        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查  
	        $variable = array(
	        	//会员等级
	        	'global_user_roles' => array(
					7 => '普通用户',
					6 => '会员',
					5 => '银牌会员', 
					4 => '金牌会员',
					3 => '钻石会员',
					2 => '皇冠会员',
					//1 => '超级管理员' //超级管理员不能添加
	        	),
	        	// 账号状态
	        	'global_user_status' => array(
	        		0 => '冻结',
					1 => '正常',
	        	)
	        );  

	        $this->CI->load->vars($variable);  
	    }  
	}  
	

 ?>