<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_post extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		
		if(!$this->session->userdata('loggedIn')){
			redirect('home');
		}
	}
	
	
	
	
	
	public function index(){
		$this->data['title'] = 'Post';
		
		//getAllUserPosts
		$this->data['getAllUserPosts'] = $this->pm->getAllUserPosts();
	

		$this->template_lib->set_view('index_view', 'all_post_view', $this->data);
	}
}
