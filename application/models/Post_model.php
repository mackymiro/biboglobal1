<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	//getComments
	public function getComments($blogId){
		return $this->db->get_where('comments', array('blog_id'=> $blogId))->result_object();
	}
	
	
	//save comments
	public function saveComments($data){
		$this->db->insert('comments', $data);
	}
	
	//get blog details slug
	public function getBlogDetails($slug){
		
		 return $this->db->select('
                                   b.id,
								   b.user_id,
								   b.title,
								   b.slug,
								   b.content,
								   b.updated_at,
								   u.first_name,
								   u.last_name
					
                                    ')
                            ->from('blogs b')
							
                            ->join('users u', 'u.id=b.user_id')
							->where('b.slug', $slug)
							->order_by('b.updated_at', 'DESC')
                            ->get()->row_object();
	}
	
	//getPosts
	public function getPosts($id){
		return $this->db->get_where('blogs', array('id'=> $id))->row_object();
	}
	
	
	//getAllUserPosts
	public function getAllUserPosts(){
		return $this->db->select('
                                   b.id,
								   b.user_id,
								   b.title,
								   b.slug,
								   b.content,
								   b.updated_at,
								   u.first_name,
								   u.last_name
					
                                    ')
                            ->from('blogs b')
							
                            ->join('users u', 'u.id=b.user_id')
							->order_by('b.updated_at', 'DESC')
                            ->get()->result_object();
	}
	
	
	//get user posts
	public function getUserPosts($id){
		return $this->db->select('
                                   b.id,
								   b.user_id,
								   b.title,
								   b.slug,
								   b.content,
								   b.updated_at,
								   u.first_name,
								   u.last_name
					
                                    ')
                            ->from('blogs b')
							->where('b.user_id', $id)
                            ->join('users u', 'u.id=b.user_id')
							->order_by('b.updated_at', 'DESC')
                            ->get()->result_object();
							
	
	}
	
	
	//save create post
	public function createPost($data){
		$this->db->insert('blogs', $data);
	}
}
