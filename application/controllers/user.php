<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller{

        public function __construct(){
            parent::__construct();
            // if(!$this->session->has_userdata('username')){
            //     redirect('user/login');
            // }
            $this->load->model('user_model');
        }

        public function index(){
            redirect('user/detail');
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
			$password = md5($this->input->post('password',true));

            $query = $this->user_model->check_user(array('username' => $username, 'password' => $password));
            if ($row = $query->row_array()){
                $this->session->set_userdata(array(
                    'username' => $row['username'],
                    'user_id' => $row['user_id'],
                    'role' => $row['role'],
                    'avatar' => $row['avatar']
                ));
                $response= json_encode($row);
                echo $response;
            } else {
                header('HTTP/1.1 401 Unauthorized');
                $response="用户名或密码错误";
                echo $response;
            }

            
        }

        //查看详情
        public function detail(){
            $user_id = $this->session->userdata('user_id');
            $data['item'] = $this->user_model->get_user($user_id);
            $this->load->view('template/start');
            $this->load->view('user/detail_view', $data);
            $this->load->view('template/end');
        }

        //编辑
        public function edit(){
            $user_id = $this->session->userdata('user_id');
            $data['item'] = $this->user_model->get_user($user_id);
            $this->load->view('template/start');
            $this->load->view('user/edit_view', $data);
            $this->load->view('template/end');
        }

        public function edit_save(){
            $user_id = $this->session->userdata('user_id');
            $obj = array();
            $obj['nike_name'] = trim($this->input->post('nike_name',true));
            $obj['avatar'] = trim($this->input->post('avatar',true));

            $result = $this->user_model->update_user($user_id, $obj);
            if($result){
                redirect('user/detail/'.$user_id);
            } else {
                alert('保存失败！');
            }
        }

        //修改密码
        public function change_pwd(){
            $this->load->view('template/start');
            $this->load->view('user/change_pwd_view');
            $this->load->view('template/end');
        }

        //修改密码 保存
        public function change_pwd_save(){
            $user_id = $this->session->userdata('user_id');
            $username = $this->session->userdata('username');
            $old_password = md5(trim($this->input->post('old_password',true)));
            $new_password = md5(trim($this->input->post('new_password',true)));
            $re_password = md5(trim($this->input->post('re_password',true)));

            if($new_password != $re_password) {
                //alert('保存失败！');
                return false;
            }


            $query = $this->user_model->check_user(array('username' => $username, 'password' => $old_password));

            if ($row = $query->row_array()){
                $obj = array();
                $obj['password'] = $new_password;
                $result = $this->user_model->update_user($user_id, $obj);
                if($result){
                    redirect('user/detail/');
                } else {
                    alert('保存失败！');
                }
            } else {
                alert('原密码错误');
            }

            $this->user_model->update_user($user_id, $obj);
            
        }

        //退出
        public function logout(){
            $this->session->unset_userdata(array( 'username', 'user_id', 'role' , 'avatar'));
            redirect('user/login');
        }
    }
    
 ?>