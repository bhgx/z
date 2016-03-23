<?php 
	class User_model extends CI_Model{
		public $user_id;
		public $username;
		public $password;	
		public $nike_name;	// 昵称 
		public $role;		// 1:超级管理员；2:皇冠会员；3:钻石会员；4:金牌会员；5:银牌会员；6:会员 7:普通用户；
		public $status;		// 0:冻结；1:正常
		public $avatar;		// 头像
		public $summary;	// 描述
		public $create_at;		// 创建时间

		public function __construct(){
			parent::__construct();
			date_default_timezone_set("PRC");
		}

		//查询列表 管理员才能操作
		public function get_list($obj){
			if (count($obj) != 0) {
				$this->db->like('username',$obj['username'],'both');
				$this->db->like('nike_name',$obj['nike_name'],'both');
			}
			$query = $this->db->get('user');
			return $query;
		}

		//查询单个用户
		public function get_user($user_id){
			$this->db->where('user_id', $user_id);
			$query = $this->db->get('user');
			if($row = $query->row_array()) {
				return $row;
			}
		}

		//登录
		public function check_user($obj){
			$this->db->where('status', 1); 
			$query = $this->db->get_where('user',$obj);
			return $query;
		}

		//插入
		public function insert_user($obj){

			$this->user_id = uniqid();
			$this->username = $obj['username'];
			$this->password = $obj['password'];
			$this->nike_name = $obj['nike_name'];
			$this->role = $obj['role'];
			$this->status = $obj['status'];
			$this->avatar = $obj['avatar'];
			$this->summary = $obj['summary'];
			$this->create_at = date('Y-m-d');

			$this->db->insert('user', $this);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//更新
		public function update_user($user_id, $obj){

			$this->db->where('user_id', $user_id);
			$this->db->update('user', $obj);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}
		
		//删除 
        public function delete($user_id){

            $this->db->where('user_id', $user_id);
            $this->db->delete('user');
            if ($this->db->affected_rows() > -1) {
                return true;
            } else {
                return false;
            }
        }
	}

 ?>