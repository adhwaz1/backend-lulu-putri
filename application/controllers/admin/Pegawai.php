<?php

class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		}
		$this->load->model('model_pegawai');
		$this->load->model('model_pegawai');

		$this->load->library('upload');
	}


	function index()
	{

		$x['data'] = $this->model_pegawai->get_all_pegawai();
		$this->load->view('admin/v_pegawai', $x);
	}

	function add_Pegawai()
	{
		$x['kat'] = $this->model_pegawai->get_all_pegawai();
		$this->load->view('admin/v_add_pegawai;', $x);
	}

	function get_edit()
	{
		$kode = $this->uri->segment(4);
		$x['data'] = $this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat'] = $this->model_pegawai->get_all_pegawai();
		$this->load->view('admin/v_edit_pegawai', $x);
	}

	function simpan_pegawai()
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
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$jabatan = $this->input->post('xjabatan');

				$this->model_pegawai->simpan_pegawai($nip, $nama, $jenkel, $jabatan, $photo);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/pegawai');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pegawai');
			}

		} else {
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$jabatan = $this->input->post('xjabatan');

			$this->model_pegawai->simpan_pegawai_tanpa_img($nip, $nama, $jenkel, $jabatan);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/pegawai');
		}
	}

	function update_pegawai()
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

				$photo = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$jabatan = $this->input->post('xjabatan');
				
				$this->model_pegawai->update_pegawai($kode, $nip, $nama, $jenkel, $jabatan, $photo);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/pegawai');

			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pegawai');
			}

		} else {

				$kode = $this->input->post('kode');
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$jabatan = $this->input->post('xjabatan');

			$this->model_pegawai->update_pegawai_tanpa_img($kode, $nip, $nama, $jenkel, $jabatan);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/pegawai');
		}
	}

	function hapus_pegawai($kode)
	{
		$kode = $this->input->post('kode');
		$data = $this->model_pegawai->get_all_pegawai($kode);
		$q = $data->row_array();
		$p = $q['pegawai_photo'];
		$path = base_url() . 'assets/images/' . $p;
		delete_files($path);
		$this->model_pegawai->hapus_pegawai($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pegawai');
	}
}



