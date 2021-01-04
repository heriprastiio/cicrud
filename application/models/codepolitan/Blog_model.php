<?php
class Blog_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function adddata($data){
        $this->db->insert('blogcoursecodepolitan',$data);
    }
	public function getIdBlog($field,$value){
		$this->db->where($field, $value);
		return $this->db->get('blogcoursecodepolitan');
//		return $query->row_array();

	}
	public function updateData($id,$post){
    	$this->db->where('id',$id);
    	$this->db->update('blogcoursecodepolitan',$post);
    	return $this->db->affected_rows();
	}
	public function getSingleBlog($field,$url){
    	$this->db->where($field,$url);
    	return $this->db->get('blogcoursecodepolitan');

	}
	public function updateBlog($id, $post){
    	$this->db->where('id', $id);
    	$this->db->update('blogcoursecodepolitan',$post);
    	return $this->db->affected_rows();

	}
	public function deleteDataBlog($id){
    	$this->db->where('id',$id);
    	$this->db->delete('blogcoursecodepolitan');
    	return $this->db->affected_rows();
    }
}
