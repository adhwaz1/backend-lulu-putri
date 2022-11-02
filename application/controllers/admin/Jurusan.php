<?php

class Jurusan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_jurusan');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->model_jurusan->get_all_jurusan();
		$this->load->view('admin/v_jurusan', $x);
	}


}
