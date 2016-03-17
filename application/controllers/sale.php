<?php 

	class Sale extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
		}

		
		
		//交易记录
		public function lists(){
			$this->load->view('template/start');
			$this->load->view('sale/list_view');
			$this->load->view('template/end');
		}

		//添加交易记录
		public function add(){
			$this->load->view('template/start');
			$this->load->view('sale/add_view');
			$this->load->view('template/end');
		}
		
	}

 ?>