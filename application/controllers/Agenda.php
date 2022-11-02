<?php

class Agenda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_agenda');

	}

	function index()
	{
		$jum = $this->model_agenda->agenda();
		$page = $this->uri->segment(3);
		if (!$page):
			$offset = 0;
		else:
			$offset = $page;
		endif;
		$limit = 4;
		$config['base_url'] = base_url() . 'agenda/index/';
		$config['total_rows'] = $jum->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//Tambahan untuk styling
		$config['full_tag_open'] = '<ul class="pagination-center">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_open'] = '<li>';
		$this->pagination->initialize($config);
		$x['page'] = $this->pagination->create_links();
		$x['data'] = $this->model_agenda->agenda_perpage($offset, $limit);
		$x['header'] = $this->load->view('tampilan_frontend/header', '', TRUE);

		$this->load->view('tampilan_frontend/view_agenda', $x);
	}

}
