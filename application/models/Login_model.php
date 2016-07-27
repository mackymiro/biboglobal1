<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	//check login
	public function login($username, $password){
		 $sha_password = sha1($password);
         $this->db->select(
                    'users.id,
                     users.username,
                     users.password
                    '
                    )
                  ->from('users')
                  ->where('users.username', $username)
                  ->where('users.password', $sha_password);
           
          $query = $this->db->get();
          if($query->num_rows() == 1){
            return $query->result();
          }else{
            return false;
          }
	}
}
