<?php 
    class User extends CI_Controller{

        public function login(){
            $this->load->view('template/start');
            $this->load->view('user/login_view');
            $this->load->view('template/end');
        }

        //登录
        public function check(){
   			$username = $this->input->post('username');
			$password = $this->input->post('password');

            $this->load->model('user_model');
            $query = $this->user_model->check_user(array('username' => $username, 'password' => $password));

            if ($query->row_array()){
                $this->session->set_userdata(array('username' => $username));
                redirect('customer/lists');
            } else {
                redirect('user/login');
            }
            
        }

        //退出
        public function logout(){
            $this->session->unset_userdata('username');
            redirect('user/login');
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