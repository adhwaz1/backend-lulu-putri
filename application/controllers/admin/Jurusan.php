<?php

class Jurusan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_jurusan');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->model_jurusan->get_all_jurusan();
		$this->load->view('admin/v_jurusan', $x);
	}
	function add_jurusan()
	{
		$x['kat'] = $this->model_jurusan->get_all_jurusan();
		$this->load->view('admin/v_add_jurusan;', $x);
	}

	function get_edit()
	{
		$kode = $this->uri->segment(4);
		$x['data'] = $this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat'] = $this->model_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_ekskul', $x);
	}

	function simpan_ekskul()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image

				$config['source_image'] = './assets/images/' . $gbr['file_name'];

				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$photo = $gbr['file_name'];
				$judul = $this->input->post('ekskul_judul');
				$deskripsi = $this->input->post('ekskul_deskripsi');
				$this->model_jurusan->simpan_jurusan($judul, $deskripsi, $photo);

				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/ekskul');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/ekskul');
			}

		} else {
			$judul = $this->input->post('ekskul_judul');
			$deskripsi = $this->input->post('ekskul_deskripsi');

			$this->model_ekskul->simpan_ekskul_tanpa_img($judul, $deskripsi);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/ekskul');
		}


	}

}
