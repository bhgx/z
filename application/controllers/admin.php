<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if(!$this->session->has_userdata('username')){
                redirect('user/login');
            }
            $this->load->model('user_model');
        }

        public function index(){
            redirect('admin/lists');
        }

        //添加用户
        public function add(){
            
            $this->load->view('template/start');
            $this->load->view('user/add_view');
            $this->load->view('template/end');
        }

        //注册
        public function add_save(){

            $obj = array();
            $obj['nike_name'] = trim($this->input->post('nike_name',true));
            $obj['username'] = trim($this->input->post('username',true));
            $obj['password'] = trim($this->input->post('password',true));
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
            $this->load->view('user/list_view',$data);
            $this->load->view('template/end');
        }

        //查看详情
        public function detail($id){
            $data['item'] = $this->user_model->get_user($id);
            $this->load->view('template/start');
            $this->load->view('user/detail_view', $data);
            $this->load->view('template/end');
        }

        //更新
        public function update_join($id, $obj){

            $this->db->where('id', $id);
            $this->db->update('user', $obj);
            if ($this->db->affected_rows() > -1) {
                return true;
            } else {
                return false;
            }
        }

        //删除 
        public function delete($id){

            $this->db->where('id', $id);
            $this->db->delete('user');
            if ($this->db->affected_rows() > -1) {
                return true;
            } else {
                return false;
            }
        }
    }
    
 ?>