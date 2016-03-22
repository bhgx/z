<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Join extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(!$this->session->has_userdata('username')){
				redirect('user/login');
			}
			$this->load->model('join_model');
		}


		public function index(){
			redirect('dataview/test');
		}

		public function test(){
			$this->load->view('template/start');
			$this->load->view('join/test_view');
			$this->load->view('template/end');
		}
	}
 ?>