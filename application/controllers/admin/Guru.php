<?php

class Guru extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('model_guru');
		$this->load->model('model_guru');
		$this->load->library('upload');
	}

	
	function index()
	{
		$kode = $this->session->userdata('idadmin');
		$x['data'] = $this->model_guru->get_all_guru();
		$this->load->view('admin/v_guru', $x);
	}

	function add_guru()
	{
		$x['kat'] = $this->model_guru->get_all_guru();
		$this->load->view('admin/v_add_guru;', $x);
	}

	function get_edit()
	{
		$kode = $this->uri->segment(4);
		$x['data'] = $this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat'] = $this->model_guru->get_all_guru();
		$this->load->view('admin/v_edit_guru', $x);
	}

	function simpan_guru()
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

				$photo = $gbr['xphoto'];
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$tmp_lahir = $this->input->post('xtmp_lahir');
				$tgl_lahir = $this->input->post('xtgl_lahir');
				$pendidikan_guru = $this->input->post('xpendidikan_guru');
				$mapel = $this->input->post('xmapel');
				$this->model_guru->simpan_guru($nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $pendidikan_guru, $mapel, $photo);

				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/guru');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/guru');
			}

		} 
		
		
		
		
		else {
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$tmp_lahir = $this->input->post('xtmp_lahir');
				$tgl_lahir = $this->input->post('xtgl_lahir');
				$pendidikan_guru = $this->input->post('xpendidikan_guru');
				$mapel = $this->input->post('xmapel');
				

				$this->model_guru->simpan_guru_tanpa_img($nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $pendidikan_guru, $mapel);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/guru');
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

	function update_ekskul()
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
				$photo = $gbr['xphoto'];
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$tmp_lahir = $this->input->post('xtmp_lahir');
				$tgl_lahir = $this->input->post('xtgl_lahir');
				$pendidikan_guru = $this->input->post('xpendidikan_guru');
				$mapel = $this->input->post('xmapel');

				$this->model_guru->update_guru($kode, $nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $pendidikan_guru, $mapel, $photo);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/guru');

			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/gurul');
			}

		} else {
				$kode = $this->input->post('kode');
				$nip = $this->input->post('xnip');
				$nama = $this->input->post('xnama');
				$jenkel = $this->input->post('xjenkel');
				$tmp_lahir = $this->input->post('xtmp_lahir');
				$tgl_lahir = $this->input->post('xtgl_lahir');
				$pendidikan_guru = $this->input->post('xpendidikan_guru');
				$mapel = $this->input->post('xmapel');

			$this->model_guru->update_guru_tanpa_img($kode, $nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $pendidikan_guru, $mapel);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/guru');
		}
	}

	function hapus_guru($kode)
	{
		$kode = $this->input->post('kode');
		$data = $this->model_guru->get_all_guru($kode);
		$q = $data->row_array();
		$p = $q['guru_photo'];
		$path = base_url() . 'assets/images/' . $p;
		delete_files($path);
		$this->model_guru->hapus_guru($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/guru');
	}


}
