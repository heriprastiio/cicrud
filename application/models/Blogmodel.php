<?php

class Blogmodel extends CI_Model{
    public function insertdataBlog($data){
        $this->db->insert('blog',$data);
    }
}