<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if(!$this->session->has_userdata('username')){
                redirect('user/login');
            } else {
                if($this->session->userdata('role') > 1){
                    redirect('sale/lists');
                }
            }

            $this->load->model('user_model');
        }

        public function index(){
            redirect('admin/lists');
        }

        //添加用户
        public function add(){
            
            $this->load->view('template/start');
            $this->load->view('admin/add_view');
            $this->load->view('template/end');
        }

        //添加用户 保存
        public function add_save(){

            $obj = array();
            $obj['nike_name'] = trim($this->input->post('nike_name',true));
            $obj['username'] = trim($this->input->post('username',true));
            $obj['password'] = md5(trim($this->input->post('username',true)));
            $obj['role'] = trim($this->input->post('role',true));
            $obj['status'] = trim($this->input->post('status',true));
            $obj['avatar'] = trim($this->input->post('avatar',true));
            $obj['summary'] = trim($this->input->post('summary',true));

            $result = $this->user_model->insert_user($obj);
            if($result){
                redirect('admin/lists');
            } else {
                alert('保存失败！');
            }
        }

        //获取用户列表 管理员才能操作
        public function lists(){

            $obj = array();
            $obj['username'] = trim($this->input->post('username',true));
            $obj['nike_name'] = trim($this->input->post('nike_name',true));

            $query = $this->user_model->get_list($obj);
            $data['query'] = $query;
            
            $this->load->view('template/start');
            $this->load->view('admin/list_view',$data);
            $this->load->view('template/end');
        }

        //查看详情
        public function detail($user_id){
            $data['item'] = $this->user_model->get_user($user_id);
            $this->load->view('template/start');
            $this->load->view('admin/detail_view', $data);
            $this->load->view('template/end');
        }

        //编辑
        public function edit($user_id){
            $data['item'] = $this->user_model->get_user($user_id);
            $this->load->view('template/start');
            $this->load->view('admin/edit_view', $data);
            $this->load->view('template/end');
        }

        //编辑 保存
        public function edit_save($user_id){
            $obj = array();
            $obj['nike_name'] = trim($this->input->post('nike_name',true));
            $obj['username'] = trim($this->input->post('username',true));
            $obj['password'] = trim($this->input->post('password',true));
            $obj['role'] = trim($this->input->post('role',true));
            $obj['status'] = trim($this->input->post('status',true));
            $obj['avatar'] = trim($this->input->post('avatar',true));
            $obj['summary'] = trim($this->input->post('summary',true));

            $result = $this->user_model->update_user($user_id, $obj);
            if($result){
                redirect('admin/detail/'.$user_id);
            } else {
                alert('保存失败！');
            }
        }

        // 重置密码
        public function reset_pwd($user_id){
            $data['item'] = $this->user_model->get_user($user_id);
            $this->load->view('template/start');
            $this->load->view('admin/reset_pwd_view', $data);
            $this->load->view('template/end');
        }

        public function reset_pwd_save($user_id, $username){
            $obj = array();
            $obj['password'] = md5(trim($username));
            $result = $this->user_model->update_user($user_id, $obj);
            if($result){
                redirect('/admin/detail/'.$user_id);
            } else {
                alert('重置密码失败！');
            }
        }

        // 删除用户
        public function delete($user_id){
            $result = $this->user_model->delete($user_id);
            if($result){
                redirect('admin/lists');
            } else {
                redirect('admin/lists');
            }
        }

        
    }
    
 ?>