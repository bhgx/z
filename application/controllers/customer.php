<?php 

	class Customer extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
		}

		public function index(){
			$this->load->view('template/start');
			$this->load->view('customer/list');
			$this->load->view('template/end');
		}

		//客户公司
		public function lists(){
			// $this->session->unset_userdata('username');
			$this->load->view('template/start');
			$this->load->view('customer/list_view');
			$this->load->view('template/end');
		}

		
		//交易记录
		public function list_sale_log(){
			$this->load->view('template/start');
			$this->load->view('customer/list_sale_log_view');
			$this->load->view('template/end');
		}

		//添加客户公司
		public function add(){
			$this->load->view('template/start');
			$this->load->view('customer/add_view');
			$this->load->view('template/end');
		}
		
	}

 ?>