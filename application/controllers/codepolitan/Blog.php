<?php

class Blog extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('codepolitan/Blog_model');
        $this->load->database();
    }
    public function add(){
        if($this->input->post()){
            $data['title'] =$this->input->post('judul');
            $data['content']=$this->input->post('konten');
            $data['url']=$this->input->post('link');
            print_r($data);
            // var_dump($data);
            $this->Blog_model->adddata($data);
        }
        $this->load->view('/codepolitan/form_add');
    }
}
