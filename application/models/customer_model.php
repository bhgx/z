<?php 
	class Customer_model extends CI_Model{
		public $id;
		public $name;
		public $link_name;
		public $link_tell;
		public $link_join_id;
		public $link_sex;
		public $address;
		public $status;
		public $create_at;
		public $summary;
		public $user_id;

		//构造函数
		public function __construct(){
			parent::__construct();
			date_default_timezone_set("PRC");
		}

		//查询列表
		public function get_list($obj){

			if (count($obj) != 0) {
				$this->db->like('a.name',$obj['name'],'both');
				$this->db->like('a.link_name',$obj['link_name'],'both');
				$this->db->like('a.address',$obj['address'],'both');
				$this->db->like('a.link_join_id',$obj['link_join_id'],'both');
			}
			$this->db->where('a.user_id',$this->session->userdata('user_id'));
			$this->db->select('a.id,a.name,a.link_name,a.link_tell,a.link_sex,a.address,a.status,a.create_at,a.link_join_id,b.name as link_join_name');
			$this->db->from('customer_company as a');
			$this->db->join('join_company as b', 'a.link_join_id=b.id', 'left');
			$query = $this->db->get();
			return $query;
		}

		//查询单个公司
		public function get_customer($id){
			$this->db->where('a.id', $id);
			$this->db->select('a.id,a.name,a.link_name,a.link_tell,a.link_sex,a.address,a.status,a.create_at,a.link_join_id,a.summary,b.name as link_join_name');
			$this->db->from('customer_company as a');
			$this->db->join('join_company as b', 'a.link_join_id=b.id','left');
			$query = $this->db->get();
			if($row = $query->row_array()) {
				return $row;
			}
		}

		//插入
		public function insert_customer($obj){

			$this->id = uniqid();
			$this->create_at = date('Y-m-d');
			$this->name = $obj['name'];
			$this->link_name = $obj['link_name'];
			$this->link_tell = $obj['link_tell'];
			$this->link_join_id = $obj['link_join_id'];
			$this->link_sex = $obj['link_sex'];
			$this->address = $obj['address'];
			$this->status = $obj['status'];
			$this->summary = $obj['summary'];
			$this->user_id = $this->session->userdata('user_id');

			$this->db->insert('customer_company', $this);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//更新
		public function update_customer($id, $obj){

			$this->db->where('id', $id);
			$this->db->update('customer_company', $obj);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//删除 
		public function delete($id){

			$this->db->where('id', $id);
			$this->db->delete('customer_company');
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
			
		}
	}

 ?>