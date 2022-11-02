<?php

class About extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_sambutan');


	}

	function index()
	{
		$x['sambutan'] = $this->model_sambutan->get_all_sambutan();


		$x['total_guru'] = $this->db->get('guru')->num_rows();
		$x['total_pegawai'] = $this->db->get('pegawai')->num_rows();
		$x['total_agenda'] = $this->db->get('agenda')->num_rows();
		$x['total_jurusan'] = $this->db->get('jurusan')->num_rows();
		$x['header'] = $this->load->view('tampilan_frontend/header', '', TRUE);

		$this->load->view('tampilan_frontend/view_about', $x);
	}
}
