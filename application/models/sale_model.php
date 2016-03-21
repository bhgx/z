<?php 
	class Sale_model extends CI_Model{
		public $id;
		public $sale_date;
		public $goods_name;
		public $join_company_id;
		public $customer_company_id;
		public $link_name;
		public $link_tell;
		public $count;
		public $total_price;
		public $address;
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
				$this->db->like('sale_date',$obj['sale_date'],'both');
				$this->db->like('customer_company_id',$obj['customer_company_id'],'both');
				$this->db->like('join_company_id',$obj['join_company_id'],'both');
				$this->db->like('goods_name',$obj['goods_name'],'both');
			}
			$this->db->where('a.user_id',$this->session->userdata('user_id'));
			$this->db->select('a.*,b.name as customer_company_name,c.name as join_company_name');
			// $this->db->select('a.id,a.sale_date,a.goods_name,a.join_company_id,a.customer_company_id,a.link_name,a.link_tell,a.count,a.total_price,a.address,a.create_at,a.summary,b.name as customer_company_name,c.name as join_company_name');
			$this->db->from('sale_log as a');
			$this->db->join('customer_company as b', 'a.customer_company_id=b.id','left');
			$this->db->join('join_company as c', 'a.join_company_id=c.id','left');
			$query = $this->db->get();
			return $query;
		}

		//查询单条记录
		public function get_log($id){
			$this->db->where('a.id', $id);
			$this->db->select('a.id,a.sale_date,a.goods_name,a.join_company_id,a.customer_company_id,a.link_name,a.link_tell,a.count,a.total_price,a.address,a.create_at,a.summary,b.name as customer_company_name,c.name as join_company_name');
			$this->db->from('sale_log as a');
			$this->db->join('customer_company as b', 'a.customer_company_id=b.id','left');
			$this->db->join('join_company as c', 'a.join_company_id=c.id','left');
			$query = $this->db->get();
			if($row = $query->row_array()) {
				return $row;
			}
		}

		//插入
		public function insert_log($obj){
			$this->id = uniqid();
			$this->sale_date = $obj['sale_date'];
			$this->goods_name = $obj['goods_name'];
			$this->join_company_id = $obj['join_company_id'];
			$this->customer_company_id = $obj['customer_company_id'];
			$this->link_name = $obj['link_name'];
			$this->link_tell = $obj['link_tell'];
			$this->count = $obj['count'];
			$this->total_price = $obj['total_price'];
			$this->address = $obj['address'];
			$this->summary = $obj['summary'];
			$this->create_at = date('Y-m-d');
			$this->user_id = $this->session->userdata('user_id');

			$this->db->insert('sale_log', $this);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//更新
		public function update_log($id, $obj){

			$this->db->where('id', $id);
			$this->db->update('sale_log', $obj);
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
		}

		//删除 
		public function delete_log($id){

			$this->db->where('id', $id);
			$this->db->delete('sale_log');
			if ($this->db->affected_rows() > -1) {
				return true;
			} else {
				return false;
			}
			
		}
	}

 ?>