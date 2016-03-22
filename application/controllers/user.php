<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('user_model');
        }

        public function index(){
            redirect('user/login');
        }

        // 到登录页面
        public function login(){
            if($this->session->has_userdata('username')){
                redirect('sale/lists');
            }
            $this->load->view('template/start');
            $this->load->view('user/login_view');
            $this->load->view('template/end');
        }

        //登录
        public function check(){
   			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);

            $query = $this->user_model->check_user(array('username' => $username, 'password' => $password));

            if ($row = $query->row_array()){
                $this->session->set_userdata(array(
                    'username' => $row['username'],
                    'user_id' => $row['user_id'],
                    'role' => $row['role'],
                    'avatar' => $row['avatar']
                ));
                redirect('sale/lists');
            } else {

                //想在这里先给一个alert提示，然后再跳转到登陆页面

                redirect('user/login');
            }
            
        }

        //退出
        public function logout(){
            $this->session->unset_userdata(array( 'username', 'user_id', 'role' , 'avatar'));
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

        //获取用户列表
        public function lists(){

            $obj = array();
            $obj['name'] = trim($this->input->post('name',true));

            $query = $this->user_model->get_list($obj);
            $data['query'] = $query;
            
            $this->load->view('template/start');
            $this->load->view('user/list_view',$data);
            $this->load->view('template/end');
        }
    }
    
 ?>