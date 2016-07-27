<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		
		if(!$this->session->userdata('loggedIn')){
			redirect('home');
		}
	}
	
	
	
	//update post
	public function update_post(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
		if($this->form_validation->run() ==  FALSE){
			$this->data['title'] = 'Edit Post';
			
			$editId = $this->input->post('editId');
			
			$this->data['getPosts'] = $this->pm->getPosts($editId);
			$this->template_lib->set_view('index_view', 'edit_post_view', $this->data);
            
        }else{
			$createdAt = date('Y-m-d H:i:s');
			$update = array(
						'title' => $this->input->post('title'),
						'content' => $this->input->post('content'),
						'created_at'=>$createdAt
						);
			$this->db->where('id', $this->input->post('editId'))->update('blogs', $update);
			$this->session->set_flashdata('update', 1);
			redirect('post/edit/id/'.$this->input->post('editId'));
		}
	}
	
	//edit 
	public function edit($id){
		$this->data['title'] = 'Edit Post';
		$uri = $this->uri->segment(4);
		
		$this->data['getPosts'] = $this->pm->getPosts($uri);
		
		$this->template_lib->set_view('index_view', 'edit_post_view', $this->data);
	}
	
	public function index(){
		$this->data['title'] = 'Post';
		
		//getUserPosts
		$this->data['getUserPosts'] = $this->pm->getUserPosts($this->data['id']);
	

		$this->template_lib->set_view('index_view', 'post_view', $this->data);
	}
}
