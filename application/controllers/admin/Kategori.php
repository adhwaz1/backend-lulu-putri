<?php

class Kategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_kategori');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->model_kategori->get_all_kategori();
		$this->load->view('admin/v_kategori', $x);
	}


}
