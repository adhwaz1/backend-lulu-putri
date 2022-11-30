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
		$x['kat'] = $this->model_jurusan->get_all_jurusan();
		$this->load->view('admin/v_edit_jurusan', $x);
	}

	function simpan_jurusan()
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
				$judul = $this->input->post('xnama');
				$deskripsi = $this->input->post('xdeskripsi');
				$this->model_jurusan->simpan_jurusan($judul, $deskripsi, $photo);

				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/jurusan');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/jurusan');
			}

		} else {
			$judul = $this->input->post('xnama');
			$deskripsi = $this->input->post('xdeskripsi');

			$this->model_jurusan->simpan_jurusan_tanpa_img($judul, $deskripsi);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/jurusan');
		}


	}

	function do_upload()
	{
		$config['upload_path'] = "./assets/images";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload("file")) {
			$data = array('upload_data' => $this->upload->data());

			$judul = $this->input->post('judul');
			$image = $data['upload_data']['file_name'];

			$result = $this->m_upload->simpan_upload($judul, $image);
			echo json_decode($result);
		}
	}

	function update_jurusan()
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
				$gambar = $this->input->post('gambar');
				$path = './assets/images/' . $gambar;
				unlink($path);

				$kode = $this->input->post('kode');
				$photo = $gbr['file_name'];
				$judul = $this->input->post('xnama');
				$deskripsi = $this->input->post('xdeskripsi');

				$this->model_jurusan->update_jurusan($kode, $judul, $deskripsi, $photo);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/jurusan');

			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/jurusan');
			}

		} else {

			$kode = $this->input->post('kode');
			$judul = $this->input->post('xnama');
			$deskripsi = $this->input->post('xdeskripsi');

			$this->model_jurusan->update_jurusan_tanpa_img($kode, $judul, $deskripsi);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/jurusan');
		}
	}

	function hapus_jurusan($kode)
	{
		$kode = $this->input->post('kode');
		$data = $this->model_jurusan->get_all_jurusan($kode);
		$q = $data->row_array();
		$p = $q['jurusan_photo'];
		$path = base_url() . 'assets/images/' . $p;
		delete_files($path);
		$this->model_jurusan->hapus_jurusan($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/jurusan');
	}


}
