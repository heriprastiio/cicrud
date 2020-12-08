<?php


class Userdo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper();
		$this->load->model('basiccrud/Users_model');
	}
	public function index(){
		$sidata['userdata'] = $this->Users_model->getAllData();
		$this->load->view('/basiccrud/show_user',$sidata);

}
function addform(){
		$this->load->view('basiccrud/insert');
}
public function insertnewuser(){
	$variabledata['firstname'] = $this->input->post('namaper');
	$variabledata['lastname'] = $this->input->post('namaked');
	$variabledata['email'] = $this->input->post('email');
	$variabledata['password'] = $this->input->post('pass');
	$doinsert = $this->Users_model->doinsert($variabledata);
	if ($doinsert){
		header('Location'.base_url()."basiccrud/userdo/".$this->index());
	}
}
}
