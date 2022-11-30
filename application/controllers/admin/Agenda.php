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
		$this->load->model('model_agenda');
	}

	function index()
	{
		$x['data'] = $this->model_agenda->get_all_agenda();
		$this->load->view('admin/v_agenda', $x);
	}

	function add_agenda()
	{
		$x['kat'] = $this->model_agenda->get_all_agenda();
		$this->load->view('admin/v_add_agenda', $x);
	}

	function get_edit()
	{
		$kode = $this->uri->segment(4);
		$x['data'] = $this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat'] = $this->model_agenda->get_all_agenda();
		$this->load->view('admin/v_edit_agenda', $x);
	}

	function simpan_agenda()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				$nama_agenda=$this->input->post('xnama');
				$deskripsi=$this->input->post('xdeskripsi');
				$mulai=$this->input->post('xmulai');
				$selesai=$this->input->post('xselesai');
				$tempat=$this->input->post('xtempat');
				$waktu=$this->input->post('xwaktu');
				$keterangan=$this->input->post('xketerangan');	
				$this->model_agenda->simpan_agenda($nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan);

				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/agenda');

				} else {
					echo $this->session->set_flashdata('msg', 'warning');
					redirect('admin/agenda');
				}

			} else {
				$nama_agenda=$this->input->post('xnama');
				$deskripsi=$this->input->post('xdeskripsi');
				$mulai=$this->input->post('xmulai');
				$selesai=$this->input->post('xselesai');
				$tempat=$this->input->post('xtempat');
				$waktu=$this->input->post('xwaktu');
				$keterangan=$this->input->post('xketerangan');

				$this->model_agenda->simpan_agenda($nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/agenda');

			}
		}


	function update_agenda()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				$nama_agenda=$this->input->post('xnama');
				$deskripsi=$this->input->post('xdeskripsi');
				$mulai=$this->input->post('xmulai');
				$selesai=$this->input->post('xselesai');
				$tempat=$this->input->post('xtempat');
				$waktu=$this->input->post('xwaktu');
				$keterangan=$this->input->post('xketerangan');
			
	
				$this->model_agenda->simpan_agenda($nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/agenda');
				
			}else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/agenda');
			}
				
		}else {
				$nama_agenda=$this->input->post('xnama');
				$deskripsi=$this->input->post('xdeskripsi');
				$mulai=$this->input->post('xmulai');
				$selesai=$this->input->post('xselesai');
				$tempat=$this->input->post('xtempat');
				$waktu=$this->input->post('xwaktu');
				$keterangan=$this->input->post('xketerangan');
				
			$this->model_agenda->simpan_agenda($nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/agenda');
		}
	}

	function hapus_agenda()
	{
		$kode = $this->input->post('kode');
		$data = $this->model_agenda->get_all_agenda($kode);
		$q = $data->row_array();
		$this->model_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/agenda');
	}
}
