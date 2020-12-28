<?php
class Blog extends CI_Controller{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->database();
        $this->load->model('basiccrud/Blogmodel');
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
    public function tambah()
    {
        # code...
        if ($this->input->get()){
            $data['judul'] = $this->input->get('judul');
            $data['konten'] = $this->input->get('content');
            // print_r($data);
            $this->Blogmodel->insertdataBlog($data);
        }
        $this->load->view('/basiccrud/form_tambah');
    }

}
?>
