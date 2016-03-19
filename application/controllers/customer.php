<?php 

	class Customer extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
			$this->load->model('join_model');
			$this->load->model('customer_model');
		}

		public function index(){
			redirect('customer/lists');
		}

		//客户公司
		public function lists(){

			$arrayName = array();
			$data['joins'] = $this->join_model->get_list($arrayName);

			$obj = array();
			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['address'] = trim($this->input->post('address'));
			$obj['link_join_id'] = trim($this->input->post('link_join_id'));

			$query = $this->customer_model->get_list($obj);
			$data['query'] = $query;

			$this->load->view('template/start');
			$this->load->view('customer/list_view', $data);
			$this->load->view('template/end');
		}

		//查看详情
		public function detail($id){
			$data['item'] = $this->customer_model->get_customer($id);
			$this->load->view('template/start');
			$this->load->view('customer/detail_view', $data);
			$this->load->view('template/end');
		}

		//添加客户
		public function add(){
			$obj = array();
			$data['joins'] = $this->join_model->get_list($obj);
			$this->load->view('template/start');
			$this->load->view('customer/add_view',$data);
			$this->load->view('template/end');
		}

		//添加我的客户 保存
		public function add_save(){
			
			$obj = array();

			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['link_sex'] = trim($this->input->post('link_sex'));
			$obj['link_tell'] = trim($this->input->post('link_tell'));
			$obj['address'] = trim($this->input->post('address'));
			$obj['link_join_id'] = $this->input->post('link_join_id');
			$obj['status'] = $this->input->post('status');
			$result = $this->customer_model->insert_customer($obj);
			if($result){
				redirect('customer/lists');
			} else {
				alert('保存失败！');
			}
		}

		//编辑我的公司
		public function edit($id){
			$obj = array();
			$data['joins'] = $this->join_model->get_list($obj);
			$data['item'] = $this->customer_model->get_customer($id);
			$this->load->view('template/start');
			$this->load->view('customer/edit_view', $data);
			$this->load->view('template/end');
		}

		// 编辑我的公司 保存
		public function edit_save($id){
			
			$obj = array();

			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['link_tell'] = trim($this->input->post('link_tell'));
			$obj['link_sex'] = $this->input->post('link_sex');
			$obj['link_join_id'] = $this->input->post('link_join_id');
			$obj['address'] = trim($this->input->post('address'));
			$obj['status'] = $this->input->post('status');

			$result = $this->customer_model->update_customer($id, $obj);
			if($result){
				redirect('customer/detail/'.$id);
			} else {
				alert('保存失败！');
			}
		}

		// 删除我的公司
		public function delete($id){
			$result = $this->customer_model->delete($id);
			if($result){
				redirect('customer/lists');
			} else {
				alert('操作失败！');
			}
		}
		
	}

 ?>