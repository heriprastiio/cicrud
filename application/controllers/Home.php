<?php


class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ponsel_model');
		$this->load->helper();
		$this->load->library('form_validation','session');
	}
	public function lihatdata(){
		$data['databases'] = $this->ponsel_model->get_data();
		$this->load->view('header');
		$this->load->view('tampilponsel',$data);
		$this->load->view('footer');
	}
	public function createdata(){
		$this->load->view('header');
		$this->load->view('createdata');
		$this->load->view('footer');
	}

}
