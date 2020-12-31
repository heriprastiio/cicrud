<?php

class Crud extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
    }

    public function savedata()
    {
        # code...
        $this->load->view('/codepolitan/form_add');
        if ($this->input->post('save'));
    }
}