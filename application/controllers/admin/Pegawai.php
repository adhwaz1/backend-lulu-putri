<?php

class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_pegawai');
		$this->load->model('model_pengguna');

		$this->load->library('upload');
	}


	function index()
	{

		$x['data'] = $this->model_pegawai->get_all_pegawai();
		$this->load->view('admin/v_pegawai', $x);
	}


}
