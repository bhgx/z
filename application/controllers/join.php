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
			$this->load->view('template/start');
			$this->load->view('join/list');
			$this->load->view('template/end');
		}


		//我加入的公司
		public function lists(){
			
			$query = $this->join_model->get_list();

			$data['query'] = $query;
			
			$this->load->view('template/start');
			$this->load->view('join/list_view',$data);
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
			
			$obj = $arrayName = array();

			$obj['name'] = trim($this->input->post('name'));
			$obj['link_name'] = trim($this->input->post('link_name'));
			$obj['link_tell'] = trim($this->input->post('link_tell'));
			$obj['address'] = trim($this->input->post('address'));
			$obj['status'] = trim($this->input->post('status'));

			$result = $this->join_model->insert_join($obj);
			if($result){
				redirect('join/lists');
			} else {
				redirect('join/lists');
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