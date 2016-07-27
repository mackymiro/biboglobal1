<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	//check username
	public function username($username){
		$this->db->select('
						users.username
						')
				->from('users')
				->where('username', $username);
		$q = $this->db->get();
		if($q->num_rows() ==  1){
			return $q->result();
		}else{
			return false;
		}
	}
	
	//check email
	public function email($email){
		$this->db->select('
						users.email_address
						')
				  ->from('users')
			      ->where('email_address', $email);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
				  
	}
	
    //save registration data
	public function save($data){
		$this->db->insert('users', $data);
	}
}
