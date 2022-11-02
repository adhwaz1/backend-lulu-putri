<?php

class Agenda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_agenda');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->model_agenda->get_all_agenda();
		$this->load->view('admin/v_agenda', $x);
	}


}
