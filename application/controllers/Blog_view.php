<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_view extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		
		
	}
	
	//add comments
	public function add_comments(){
		$this->form_validation->set_rules('comments' , 'Comments', 'trim|required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Details ';
			$this->data['getBlogDetails'] = $this->pm->getBlogDetails($this->input->post('slugName'));
			
			//getComments
			$this->data['getComments'] = $this->pm->getComments($this->input->post('blogId'));
			
			$this->template_lib->set_view('index_view', 'blog_post_view', $this->data);
		}else{
			$createdAt = date('Y-m-d H:i:s');
			$array = array(
					'blog_id'=>$this->input->post('blogId'),
					'content'=>$this->input->post('comments'),
					'created_at'=>$createdAt
					);
			$this->pm->saveComments($array);
			$this->session->set_flashdata('comments', 1);
			redirect('blog-view/details/'.$this->input->post('slugName'));
		}
	}
	
	//details
	public function details(){
		$this->data['title'] = 'Details ';
		$uri = $this->uri->segment(3);

		//getBlogDetails
		$this->data['getBlogDetails'] = $this->pm->getBlogDetails($uri);
		
		
		//getComments
		$this->data['getComments'] = $this->pm->getComments($this->data['getBlogDetails']->id);
		
		
		$this->template_lib->set_view('index_view', 'blog_post_view', $this->data);
		
	}
	
	
}
