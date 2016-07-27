<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
		
		if($this->session->userdata('loggedIn')){
			redirect('post');
		}
	}
	
	public function index(){
		$this->data['title'] = 'Home';
		
		//getAllUserPosts
		$this->data['getAllUserPosts'] = $this->pm->getAllUserPosts();
		
		
		$this->template_lib->set_view('index_view', 'home_view', $this->data);
	}
}
