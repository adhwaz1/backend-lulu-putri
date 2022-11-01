<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
		$x['total_guru']=$this->db->get('guru')->num_rows();
		$x['total_pegawai']=$this->db->get('pegawai')->num_rows();
		$x['total_agenda']=$this->db->get('agenda')->num_rows();
		$x['total_jurusan']=$this->db->get('jurusan')->num_rows();
			$this->load->view('admin/v_dashboard',$x);
		}else if($this->session->userdata('akses')=='2'){
		$x['total_guru']=$this->db->get('guru')->num_rows();
		$x['total_pegawai']=$this->db->get('pegawai')->num_rows();
		$x['total_agenda']=$this->db->get('agenda')->num_rows();
		$x['total_jurusan']=$this->db->get('jurusan')->num_rows();
			$this->load->view('admin/v_dashboard',$x);

		}else  {
			redirect('administrator');
		}
	
	}
	
}