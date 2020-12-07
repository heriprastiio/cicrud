<?php

class User_model extends CI_Model{
    // protected $tabel = 'user1';
    public function getData(){
        $this->db->select('*');
        $this->db->from('user1');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambahketabel($adadata)
    {
        # code...
        $this->db->insert('user1',$adadata);
    }
    public function edit($data, $idedit)
    {
        # code...
        // $recordupdate = $this->User_model->editdata($idedit);
        $this->db->where('firstname', $idedit);
        $this->db->update('user1', $data);
    }
    public function getdatauser($id)
    {
        # code...
        $this->db->where('firstname',$id);
        $query = $this->db->get('user1');
        return $query->row();
    }
}