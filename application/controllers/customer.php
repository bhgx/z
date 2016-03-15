<?php 

	class Customer extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('login');
			}
		}

		public function index(){
			$this->load->view('template/start');
			$this->load->view('customer/list');
			$this->load->view('template/end');
		}

		//客户公司
		public function list_customer(){
			// $this->session->unset_userdata('username');
			$this->load->view('template/start');
			$this->load->view('customer/list_customer_view');
			$this->load->view('template/end');
		}

		//我加入的公司
		public function list_join(){
			$this->load->view('template/start');
			$this->load->view('customer/list_join_view');
			$this->load->view('template/end');
		}
		//交易记录
		public function list_sale_log(){
			$this->load->view('template/start');
			$this->load->view('customer/list_sale_log_view');
			$this->load->view('template/end');
		}
	}


 ?>