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
//         $config = array(array('field'=>'nama','label'=>'Nama','rules'=>'Dibutuhkan Nama'),
//     array('field'=>'email','label'=>'Email','rules'=>'Dibutuhkan Email'),
// array('field'=>'username','label'=>'Username','rules'=>'Dibutuhkan Username'),
// array('field'=>'password','label'=>'Password','rules'=>'Dibutuhkan Password'),
// array('field'=>'password2','label'=>'Confirm Password','rules'=>'Dibutuhkan Password'));

        $this->form_validation->set_message('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Nama','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matces[password]');
        // $this->form_validation->set_message('nama', 'Nama','Dibutuhkan untuk diisi');

        // $this->form_validation->set_rules($config);
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('register',$data);    
            # code...
        }else{
            $encyriptpass = md5($this->input->post('password'));
        }
    }
}   