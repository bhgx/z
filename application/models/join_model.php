<?php 
	class Join_model extends CI_Model{
		public $id;
		public $name;
		public $link_name;
		public $link_tell;
		public $address;
		public $status;
		public $join_at;
		public $leave_at;

		public function __construct(){
			parent::__construct();
			date_default_timezone_set("PRC");
		}
		//查询
		public function get_list(){
			
			$query = $this->db->get('join_company');
			return $query;
		}

		//插入
		public function insert_join($obj){
			$this->id = uniqid();
			$this->name = $obj['name'];
			$this->link_name = $obj['link_name'];
			$this->link_tell = $obj['link_tell'];
			$this->address = $obj['address'];
			$this->status = $obj['status'];
			$this->join_at = date('Y-m-d');
			$this->db->insert('join_company', $this);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//删除 
		public function delete($id){

			$this->db->where('id', $id);
			$this->db->delete('join_company');
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
			
		}
	}

 ?>