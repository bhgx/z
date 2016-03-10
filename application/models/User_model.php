<?php 
	class User_model extends CI_Model{
		public username;
		public password;
		public uid;
		public creatat;

		//查询
		public function get_user_by_id($id){
			$query = $this->db->get('user', $id);
			return $query->result();
		}

		//插入
		public function insert_user($obj){
			$this->username = $obj['username'];
			$this->password = $obj['password'];
			$this->username = uniqid();
			$this->username = time();
			$this->db->insert('user', $this);
		}
	}

 ?>