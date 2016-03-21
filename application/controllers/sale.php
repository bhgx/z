<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Sale extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
			$this->load->model('join_model');
			$this->load->model('customer_model');
			$this->load->model('sale_model');
		}

		public function index(){
			redirect('sale/lists');
		}

		//交易记录
		public function lists(){

			$obj = array();
			$obj['sale_date'] = trim($this->input->post('sale_date',true));
			$obj['customer_company_id'] = trim($this->input->post('customer_company_id',true));
			$obj['join_company_id'] = trim($this->input->post('join_company_id',true));
			$obj['goods_name'] = $this->input->post('goods_name');

			$query = $this->sale_model->get_list($obj);
			$data['query'] = $query;
			$data['joins'] = $this->join_model->get_list(array());
			$data['customers'] = $this->customer_model->get_list(array());

			$this->load->view('template/start');
			$this->load->view('sale/list_view', $data);
			$this->load->view('template/end');
		}

		//添加交易记录
		public function add(){
			$data['joins'] = $this->join_model->get_list(array());
			$data['customers'] = $this->customer_model->get_list(array());
			$this->load->view('template/start');
			$this->load->view('sale/add_view', $data);
			$this->load->view('template/end');
		}

		//添加交易记录 保存
		public function add_save(){

			$obj = array();
			$obj['sale_date'] = trim($this->input->post('sale_date',true));
			$obj['goods_name'] = trim($this->input->post('goods_name',true));
			$obj['join_company_id'] = trim($this->input->post('join_company_id',true));
			$obj['customer_company_id'] = trim($this->input->post('customer_company_id',true));
			$obj['link_name'] = trim($this->input->post('link_name',true));
			$obj['link_tell'] = trim($this->input->post('link_tell',true));
			$obj['count'] = trim($this->input->post('count',true));
			$obj['total_price'] = trim($this->input->post('total_price',true));
			$obj['address'] = trim($this->input->post('address',true));
			$obj['create_at'] = trim($this->input->post('create_at',true));
			$obj['summary'] = trim($this->input->post('summary',true));

			$result = $this->sale_model->insert_log($obj);
			if($result){
				redirect('sale/lists');
			} else {
				alert('保存失败！');
			}
		}

		// 查看交易记录详情
		public function detail($id){
			$data['item'] = $this->sale_model->get_log($id);
			$this->load->view('template/start');
			$this->load->view('sale/detail_view', $data);
			$this->load->view('template/end');
		}

		// 编辑交易记录
		public function edit($id){
			$obj = array();
			$data['joins'] = $this->join_model->get_list(array());
			$data['customers'] = $this->customer_model->get_list(array());
			$data['item'] = $this->sale_model->get_log($id);
			$this->load->view('template/start');
			$this->load->view('sale/edit_view', $data);
			$this->load->view('template/end');
		}

		// 编辑交易记录 保存
		public function edit_save($id){
			
			$obj = array();

			$obj['sale_date'] = trim($this->input->post('sale_date',true));
			$obj['goods_name'] = trim($this->input->post('goods_name',true));
			$obj['join_company_id'] = trim($this->input->post('join_company_id',true));
			$obj['customer_company_id'] = trim($this->input->post('customer_company_id',true));
			$obj['link_name'] = trim($this->input->post('link_name',true));
			$obj['link_tell'] = trim($this->input->post('link_tell',true));
			$obj['count'] = trim($this->input->post('count',true));
			$obj['total_price'] = trim($this->input->post('total_price',true));
			$obj['address'] = trim($this->input->post('address',true));
			$obj['summary'] = trim($this->input->post('summary',true));

			$result = $this->sale_model->update_log($id, $obj);
			if($result){
				redirect('sale/detail/'.$id);
			} else {
				alert('保存失败！');
			}
		}

		// 删除交易记录
		public function delete($id){
			$result = $this->sale_model->delete_log($id);
			if($result){
				redirect('sale/lists');
			} else {
				alert('操作失败！');
			}
		}

	}

 ?>