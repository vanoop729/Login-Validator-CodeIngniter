<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_data($username, $password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username' => $username, 'password' => $password));

        $query = $this->db->get();

        $user = $query->row();

        if(!$user) {
            $this->session->set_flashdata("error", "Account doesn't exist in database");
            redirect("login/", "refresh");
        }

        else{
            // setting session variables
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            redirect("user/", "refresh");
        }

    }
}

?>