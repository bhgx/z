<?php 

	class Join extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
			$this->load->model('join_model');
		}


		public function index(){
			redirect('join/lists');
		}

		//我加入的公司
		public function lists(){

			$obj = array();
			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['address'] = trim($this->input->post('address'));

			$query = $this->join_model->get_list($obj);
			$data['query'] = $query;
			
			$this->load->view('template/start');
			$this->load->view('join/list_view',$data);
			$this->load->view('template/end');
		}

		//查看详情
		public function detail($id){
			$data['item'] = $this->join_model->get_join($id);
			$this->load->view('template/start');
			$this->load->view('join/detail_view', $data);
			$this->load->view('template/end');
		}
		
		//添加我的公司
		public function add(){
			
			$this->load->view('template/start');
			$this->load->view('join/add_view');
			$this->load->view('template/end');
		}

		//添加我的公司 保存
		public function add_save(){
			
			$obj = array();

			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['link_tell'] = trim($this->input->post('link_tell'));
			$obj['address'] = trim($this->input->post('address'));
			$obj['status'] = trim($this->input->post('status'));

			$result = $this->join_model->insert_join($obj);
			if($result){
				redirect('join/lists');
			} else {
				alert('保存失败！');
			}
		}

		//编辑我的公司
		public function edit($id){
			$data['item'] = $this->join_model->get_join($id);
			$this->load->view('template/start');
			$this->load->view('join/edit_view', $data);
			$this->load->view('template/end');
		}

		// 编辑我的公司 保存
		public function edit_save($id){
			
			$obj = array();

			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['link_tell'] = trim($this->input->post('link_tell'));
			$obj['address'] = trim($this->input->post('address'));
			$obj['status'] = trim($this->input->post('status'));

			$result = $this->join_model->update_join($id, $obj);
			if($result){
				redirect('join/detail/'.$id);
			} else {
				alert('保存失败！');
			}
		}

		// 删除我的公司
		public function delete($id){
			$result = $this->join_model->delete($id);
			if($result){
				redirect('join/lists');
			} else {
				redirect('join/lists');
			}
		}
	}


 ?>