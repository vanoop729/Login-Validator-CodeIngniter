<?php

class Auth extends CI_Controller{

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
        if($this->form_validation->run()) {
            
            $username= $_POST['username'];
            $password= $_POST['password'];

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username' => $username, 'password' => $password));

            $query = $this->db->get();

            $user = $query->row();

            if($user->username){
               // setting session variables
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;

                redirect("user/profile", "refresh");
            }
            else{
                $this->session->set_flashdata("error", "Account doesn't exist in database");
                redirect("auth/login", "refresh");
            }

        }
        
        $this->load->view('login');
    }


    public function register(){

        if(isset($_POST['register'])) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');
            
            //if form validation true
            if($this->form_validation->run()) {
                //add user to DB
                $data = array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                );

                $this->db->insert('users', $data);

                $this->session->set_flashdata("success", "Successfully Registered!");
                redirect("auth/register", "refresh");
            }
        }

        $this->load->view('register');
    }


    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");
    }
}

?>