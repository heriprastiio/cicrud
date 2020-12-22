<?php
class Blog extends CI_Controller{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        // $this->load->database();
        $query = $this->db->get('blog');
        $data['blogs'] = $query->result_array();
        $this->load->view('/basiccrud/blogs',$data);
    }
    public function detail($url){
        // $this->load->database();
        $this->db->where('url',$url);
        // $query = $this->db->query('Select * from blog where url = "'.$url.' " ');
        // $data['blog'] = $query->row_array();
        // print_r($data);
        $query = $this->db->get('blog');
        $data['blogskey'] = $query->row_array();
        $this->load->view('/basiccrud/detail',$data);
    }
}
?>