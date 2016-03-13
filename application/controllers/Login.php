<?php 
    class Login extends CI_Controller{

        public function index(){
            $this->load->view('template/start');
            $this->load->view('login_view');
            $this->load->view('template/end');
        }

        //登录
        public function check(){
   			$username = $this->input->post('username');
			$password = $this->input->post('password');

            $this->load->model('user_model');
            $query = $this->user_model->check_user(array('username' => $username, 'password' => $password));

            if ($query->row_array()){
                path('customer/lists');
            } else {
                path('login/index');
            }
            
        }

        //注册
        public function register(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->load->model('user_model');
            $obj = $arrayName = array('username' => $username, 'password' => $password);
            $this->user_model->insert_user($obj);
        }
    }
    
 ?>