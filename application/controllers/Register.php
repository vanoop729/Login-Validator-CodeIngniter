<?php

class Register extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index(){

        if(isset($_POST['register'])) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');
            
            //if form validation true
            if($this->form_validation->run()) {
                $username= $_POST['username'];
                $password= $_POST['password'];

                $this->Register_model->put_data($username, $password);
                }
        }

        //load the register view
        $this->load->view('register');
    }

}

?>