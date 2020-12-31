<?php
class Blog_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function adddata($data){
        $this->db->insert('blogcoursecodepolitan',$data);
    }
}