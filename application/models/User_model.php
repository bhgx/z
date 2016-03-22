<?php 
	class User_model extends CI_Model{
		public $username;
		public $password;
		public $uid;
		public $role;

		public function __construct(){
			parent::__construct();
		}

		//查询列表 管理员才能操作
		public function get_list($obj){
			if (count($obj) != 0) {
				$this->db->like('name',$obj['name'],'both');
			}
			$query = $this->db->get('user');
			return $query;
		}

		//查询单个用户
		public function get_user_by_id($id){
			
			$query = $this->db->get('user', $id);
			return $query->result();
		}

		//登录
		public function check_user($obj){
			$this->db->where('status', 1); //1代表正常，0代表冻结
			$query = $this->db->get_where('user',$obj);
			return $query;
		}

		//插入
		public function insert_user($obj){
			$this->username = $obj['username'];
			$this->password = $obj['password'];
			$this->uid = uniqid();
			$this->role = 1;
			$this->db->insert('user', $this);
		}
	}

 ?>