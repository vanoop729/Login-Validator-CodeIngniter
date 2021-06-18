<?php

class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //if form_validation is successful
        if($this->form_validation->run()) {
            $username= $_POST['username'];
            $password= $_POST['password'];

            $this->Login_model->get_data($username, $password);
        }
        //load the login view
        $this->load->view('login');
    }

}

?>