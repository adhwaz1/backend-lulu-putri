<?php
class Home extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model('model_tulisan');
		$this->load->model('model_ekskul');
		$this->load->model('model_jurusan');
		$this->load->model('model_agenda');
		$this->load->model('model_slider');
		$this->load->model('model_pengguna');
		
		
	}
	function index(){
			//untuk ambil data ditampilkan di foreach halaman front end home nantinya jadi $slider misalkan
			$x['berita']=$this->model_tulisan->get_berita_home();
			$x['jurusan']=$this->model_jurusan->get_jurusan_home();
			$x['ekskul']=$this->model_ekskul->get_ekskul_home();
			$x['slider']=$this->model_slider->get_all_slider();		
			$x['agenda']=$this->model_agenda->get_agenda_home();


			//untuk hitung jumlah data masing - masing entitas misalkan data guru
			$x['tot_guru']=$this->db->get('guru')->num_rows();
			$x['tot_pegawai']=$this->db->get('pegawai')->num_rows();
			$x['tot_jurusan']=$this->db->get('jurusan')->num_rows();
			$x['tot_agenda']=$this->db->get('agenda')->num_rows();
			$x['header'] = $this->load->view('tampilan_frontend/header','',TRUE);
			
			$this->load->view('tampilan_frontend/view_home',$x);
	}

}
