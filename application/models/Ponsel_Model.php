<?php


class Ponsel_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_data(){
		$query = $this->db->get('ponsel');
		return $query->result();
	}
	public function tambah_data(){
		$inidataekstrak = array('nama_hp'=> $this->input->post(''));
	}

}
