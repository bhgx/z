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

		//构造函数
		public function __construct(){
			parent::__construct();
			date_default_timezone_set("PRC");
		}

		//查询列表
		public function get_list($obj){
			if (count($obj) != 0) {
				$this->db->like('name',$obj['name'],'both');
				$this->db->like('link_name',$obj['link_name'],'both');
				$this->db->like('address',$obj['address'],'both');
			}
			$query = $this->db->get('join_company');
			return $query;
		}

		//查询单个公司
		public function get_join($id){
			$this->db->where('id', $id);
			$query = $this->db->get('join_company');
			if($row = $query->row_array()) {
				return $row;
			}
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

		//更新
		public function update_join($id, $obj){

			$this->db->where('id', $id);
			$this->db->update('join_company', $obj);
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