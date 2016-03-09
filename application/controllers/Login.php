<?php 
    class Login extends CI_Controller{

        public function index(){
            $this->load->view('loginview');
        }

        public function check(){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    }
    
 ?>