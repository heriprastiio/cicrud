<?php

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('codepolitan/Blog_model');
		$this->load->database();
//		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$querydb = $this->db->get('blogcoursecodepolitan');
		$data['blogview'] = $querydb->result_array();
		$this->load->view('codepolitan/blogs',$data);
	}

	//Tambah
	public function add()
	{
		if ($this->input->post()) {
			$data['title'] = $this->input->post('judul');
			$data['content'] = $this->input->post('konten');
			$data['url'] = $this->input->post('link');

			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('cover'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				print_r($this->upload->data());
				exit;
			}
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
		$this->load->view('/codepolitan/form_edit', $data);
	}

	public function hapus($id)
	{
		$this->Blog_model->deleteDataBlog($id);
		redirect('/');
	}
	public function do_upload()
	{

	}
}
