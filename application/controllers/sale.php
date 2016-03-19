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
		}

		//交易记录
		public function lists(){
			$data['joins'] = $this->join_model->get_list(array());
			$data['customers'] = $this->customer_model->get_list(array());
			$this->load->view('template/start');
			$this->load->view('sale/list_view');
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

	}

 ?>