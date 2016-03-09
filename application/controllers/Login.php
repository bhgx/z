<?php 
    class Login extends CI_Controller{

        public function index(){
            $this->load->view('loginview');
        }

        public function check(){
            echo $_POST['username'];
            echo $_POST['password'];
        }
    }
    
 ?>