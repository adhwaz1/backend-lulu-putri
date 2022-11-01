<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_guru');
		$this->load->model('model_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->model_guru->get_all_guru();
		$this->load->view('admin/v_guru',$x);
	}
	
	

}