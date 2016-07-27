<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_post extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
		
		if(!$this->session->userdata('loggedIn')){
			redirect('home');
		}
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
	}
	
	
	//create post
	public function create(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required', TRUE);
		$this->form_validation->set_rules('content', 'Content', 'trim|required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$slug = url_title($this->input->post('title'), 'dash', TRUE);
			$createdAt = date('Y-m-d H:i:s');
			$array = array(
						'user_id'=>$this->data['id'],
						'title'=>$this->input->post('title'),
						'content'=>$this->input->post('content'),
						'slug'=>$slug,
						'created_at'=>$createdAt
						);
			$this->pm->createPost($array);
			$this->session->set_flashdata('createSucc', 1);
			redirect('create-post');
			
		}
		
	}
	
	public function index(){
		$this->data['title'] = 'Create Post';
		
		$this->template_lib->set_view('index_view', 'create_post_view', $this->data);
	}
}
