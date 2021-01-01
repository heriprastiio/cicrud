<?php

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('codepolitan/Blog_model');
		$this->load->database();
	}

	//Tambah
	public function add()
	{
		if ($this->input->post()) {
			$data['title'] = $this->input->post('judul');
			$data['content'] = $this->input->post('konten');
			$data['url'] = $this->input->post('link');
			print_r($data);
			// var_dump($data);
			$this->Blog_model->adddata($data);
		}
		$this->load->view('/codepolitan/form_add');
	}

	public function detail($url)
	{
		// $this->load->database();
		$this->db->where('url', $url);
		// $query = $this->db->query('Select * from blog where url = "'.$url.' " ');
		// $data['blog'] = $query->row_array();
		// print_r($data);
		$query = $this->db->get('blog');
		$data['blogskey'] = $query->row_array();
		$this->load->view('/basiccrud/detail', $data);
	}

	//Edit
	public function edit($id)
	{
		//Ambil data
		$query = $this->Blog_model->getSingleBlog('id', $id);
		$data['blog'] = $query->row_array();
		if ($this->input->post()) {
			$post['title'] = $this->input->post('judul');
			$post['content'] = $this->input->post('konten');
			$post['url'] = $this->input->post('link');
			$id = $this->Blog_model->updateBlog($id, $post);
			if ($id)
				echo "Berhasil disimpan";
			else
				echo "Data gagal disimpan";
		}
		$this->load->view('/codepolitan/form_edit',$data);
	}
}
