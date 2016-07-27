<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		
		//redirect page if currently loggedIn
		if($this->session->userdata('loggedIn')){
			redirect('post');
		}
	}
	
	
	//check username if exits
	public function check_username(){
		$username = $this->input->post('username');
		$result = $this->um->username($username);
		if($result){
			$this->form_validation->set_message('check_username', 'Username Already Exists');
			return false;
		}else{
			return true;
		}
	}
	
	//check email if  exists
	public function check_email(){
		$email = $this->input->post('email');
		$result = $this->um->email($email);
		if($result){
			$this->form_validation->set_message('check_email', 'Email Already Exists');
			return false;
		}else{
			return true; 
		}
	}
	
	//add registration
	public function add(){
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required',  TRUE);
		$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required',  TRUE);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email',  TRUE);
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_username',  TRUE);
		$this->form_validation->set_rules('password', 'Password', 'trim|required',  TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$createdAt = date('Y-m-d H:i:s');
			
			$pwd = $this->input->post('password');
			$sha1 = sha1($pwd);
			$array = array(
					'first_name'=>$this->input->post('firstName'),
					'last_name'=>$this->input->post('lastName'),
					'email_address'=>$this->input->post('email'),
					'username'=>$this->input->post('username'),
					'password'=>$sha1,
					'created_at'=>$createdAt
					);
			$this->um->save($array);
			$this->session->set_flashdata('succReg', 1);
			redirect('register');
		}
	}
	
	
	public function index(){
		$this->data['title'] = 'Register';
		
		$this->template_lib->set_view('index_view', 'register_view', $this->data);
	}
}
