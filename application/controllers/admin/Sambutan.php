<?php
class Sambutan extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_sambutan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->model_sambutan->get_all_sambutan();
		$this->load->view('admin/v_sambutan',$x);
	}
	
	

}