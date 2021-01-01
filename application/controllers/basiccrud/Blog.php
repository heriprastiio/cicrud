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
    public function tambah()
    {
        # code...
        if ($this->input->get()){
            $data['judul'] = $this->input->post('judul');
            $data['konten'] = $this->input->post('content');
            // print_r($data);
            $this->Blogmodel->insertdataBlog($data);
        }
        $this->load->view('/basiccrud/form_tambah');
    }

}
?>
