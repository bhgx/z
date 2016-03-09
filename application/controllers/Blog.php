<?php 
    class Blog extends CI_Controller{

        public function index(){
            $data['name'] = 'tom';
            $data['age'] = 14;
            $data['children'] = $arrayName = array('aaaaa','bbbbb','ccccc');
            $this->load->view('blogview',$data);
        }

        public function myblog($name,$id){
            $this->load->model('blog_model');
            $data['entries'] = $this->blog_model->get_last_ten_entries();
            $this->load->view('myblogview');
        }
    }
    
 ?>