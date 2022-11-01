<?php
class Slider extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_slider');
		$this->load->model('model_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->model_slider->get_all_slider();
		$this->load->view('admin/v_slider',$x);
	}
	
	



}