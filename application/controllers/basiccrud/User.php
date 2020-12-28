<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('basiccrud/Users_model');
        $this->load->helper('url','form');
        $this->load->library(array('form_validation','session'));
    }
    function register(){
        $data['judul'] = 'Daftar Akun';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Nama','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matces[password]');
        // $this->form_validation->set_message('nama', 'Nama','Dibutuhkan untuk diisi');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('register',$data);    
            # code...
        }else{
            $encyriptpass = md5($this->input->post('password'));
        }
    }
}