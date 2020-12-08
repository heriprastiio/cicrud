<?php


class Users_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getAllData(){
		$query = $this->db->get('user1');
		return $query->result();
	}
	function doinsert($data){
		return $this->db->insert('user1',$data);
	}

}
