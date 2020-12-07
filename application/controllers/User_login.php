<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Use App\Models\User_model;

class User_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		// $this->load->model('User_model');
		$query = $this->User_model->getData();
		$datatampil = array('dataorang' => $query);
		$this->load->view('User_views', $datatampil);
		// /$model = new User_model();
		// $data['user1'] = $this->User_model->getUser();
		// echo view('User_views',$data);
		// $dataquery['query'] = $this->User_model->getUser();
		// return $query->result();


	}

	public function formtambah()
	{
		# code...
		$this->load->view('Form_input');
	}

	public function aksitambah()
	{
		# code...
		$datainput = array('firstname' => $this->input->post('namaper'),
			'lastname' => $this->input->post('namaked'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'));
		$this->User_model->tambahketabel($datainput);
		redirect(base_url('User_login/index'));

	}

	public function formEdit($id)
	{
		$recordpanggil = $this->User_model->getdatauser($id);
		# code...
		echo "<pre>";
//		print_r($recordpanggil);
		echo "</pre>";
		$data = array('datauser' => $recordpanggil);
		$this->load->view('Form_edit', $data);
	}

	function aksiedit()
	{
		$fname = $this->input->post('namaper');
		$datainput = array($fname,
			'lastname' => $this->input->post('namaked'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'));
		$this->User_model->edit($datainput, $fname);
		redirect(base_url('User_login/index'));
	}
}
