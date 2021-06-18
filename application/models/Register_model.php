<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    
    public function put_data($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );

        $this->db->insert('users', $data);

        $this->session->set_flashdata("success", "Successfully Registered!");
        redirect("register/", "refresh");
    }    

}

?>