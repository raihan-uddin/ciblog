<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 2/9/2019
 * Time: 7:10 AM
 */
class Post_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts($slug = FAlSE){
		if ($slug === FALSE){
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts',array('slug' => $slug));
		return $query->row_array();
	}
}
