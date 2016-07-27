<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('post_model', 'pm');
	}
	
	public function index(){
		$id = $this->input->post('id');
		$this->pm->delete($id);
		redirect('post');
	}
	
	
}
