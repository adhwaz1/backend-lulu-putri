<?php
class Pengguna extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_pengguna');
		$this->load->library('upload');
		$this->load->model('model_kategori');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->model_pengguna->get_pengguna_login($kode);
		$x['data']=$this->model_pengguna->get_all_pengguna();
		$this->load->view('admin/v_pengguna',$x);
	}

	function add_pengguna(){
		$x['kat']=$this->model_kategori->get_all_kategori();
		$this->load->view('admin/v_add_pengguna',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat']=$this->model_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_pengguna',$x);
}

function simpan_pengguna(){
	$config['upload_path'] = './assets/images/'; //path folder
	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	$this->upload->initialize($config);
	if(!empty($_FILES['filefoto']['name']))
	{
		if ($this->upload->do_upload('filefoto'))
		{
				$gbr = $this->upload->data();
				//Compress Image
				
				$config['source_image']='./assets/images/'.$gbr['file_name'];
				
				$config['quality']= '60%';
				$config['width']= 710;
				$config['height']= 460;
				$config['new_image']= './assets/images/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar=$gbr['file_name'];
										$nama=$this->input->post('xnama');
										$jenkel=$this->input->post('xjenkel');
										$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
										$trim     = trim($string);
										$slug     = strtolower(str_replace(" ", "-", $trim));
										$username=$this->input->post('xusername');
										$data=$this->model_kategori->get_kategori_byid($kategori_id);
										$q=$data->row_array();
										$password=$q['xpassword'];
										//$imgslider=$this->input->post('ximgslider');
										$email=['xemail'];
										$kode=$this->session->userdata('idadmin');
										$user=$this->model_pengguna->get_pengguna_login($kode);
										$p=$user->row_array();
										$nohp=$this->input->post('xnohp');
										$level="xlevel";
										$gambar=$p['xgambar'];
										$this->model_pengguna->simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
										echo $this->session->set_flashdata('msg','success');
										redirect('admin/pengguna');
								}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/pengguna');
		}

	}else{
		redirect('admin/pengguna');
	}
	
	function update_pengguna(){

		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '60%';
					$config['width']= 710;
					$config['height']= 460;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar=$gbr['file_name'];
										$nama=$this->input->post('xnama');
										$jenkel=$this->input->post('xjenkel');
										$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
										$trim     = trim($string);
										$slug     = strtolower(str_replace(" ", "-", $trim));
										$username=$this->input->post('xusername');
										$data=$this->model_kategori->get_kategori_byid($kategori_id);
										$q=$data->row_array();
										$password=$q['xpassword'];
										//$imgslider=$this->input->post('ximgslider');
										$email=['xemail'];
										$kode=$this->session->userdata('idadmin');
										$user=$this->model_pengguna->get_pengguna_login($kode);
										$p=$user->row_array();
										$nohp=$this->input->post('xnohp');
										$level=$p['xlevel'];
										$gambar=$p['xgambar'];
										$this->model_pengguna->update_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
										echo $this->session->set_flashdata('msg','success');
										redirect('admin/pengguna');
		}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/pengguna');
		}


		}else{
				$gambar=$gbr['file_name'];
				$nama=$this->input->post('xnama');
				$jenkel=$this->input->post('xjenkel');
				$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
				$trim     = trim($string);
				$slug     = strtolower(str_replace(" ", "-", $trim));
				$username=$this->input->post('xusername');
				$data=$this->model_kategori->get_kategori_byid($kategori_id);
				$q=$data->row_array();
				$password=$q['xpassword'];
				//$imgslider=$this->input->post('ximgslider');
				$email=['xemail'];
				$kode=$this->session->userdata('idadmin');
				$user=$this->model_pengguna->get_pengguna_login($kode);
				$p=$user->row_array();
				$nohp=$this->input->post('xnohp');
				$level=$p['xlevel'];
				$gambar=$p['xgambar'];
				$this->model_pengguna->update_pengguna_tanpa_img($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/pengguna');
		}

	}
}

function hapus_pengguna(){
	$kode=$this->input->post('kode');
	$gambar=$this->input->post('gambar');
	$path='./assets/images/'.$gambar;
	unlink($path);
	$this->model_tulisan->hapus_tulisan($kode);
	echo $this->session->set_flashdata('msg','success-hapus');
	redirect('admin/pengguna');
	}
}
