<?php


class Login extends CI_Controller
{
	function index(){
		if ($this->userdata('is_logged_in')){
			redirect('student');
		}
	}

}
