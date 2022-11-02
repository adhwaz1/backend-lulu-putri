<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('model_agenda');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->model_agenda->get_all_agenda();
		$this->load->view('admin/v_agenda',$x);
	}

	function add_agenda(){
		$x['kat']=$this->model_agenda->get_all_kategori();
		$this->load->view('admin/v_add_agenda',$x);
    }

	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->model_tulisan->get_tulisan_by_kode($kode);
		$x['kat']=$this->model_agenda->get_all_kategori();
		$this->load->view('admin/v_edit_agenda',$x);
    }

	function do_upload(){
		$config['upload_path']="./assets/images";
		$config['allowed_types']='gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		 
		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
			$data = array('upload_data' => $this->upload->data());
	
			$judul= $this->input->post('judul');
			$image= $data['upload_data']['file_name']; 
			 
			$result= $this->m_upload->simpan_upload($judul,$image);
			echo json_decode($result);
		}
	 }

	 function simpan_agenda(){
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

					$agendad=$this->input->post('xnama');
					$tanggal=$this->input->post('xjenkel');
					$tempat=$this->input->post('xusername');
					$waktu=$this->input->post('xpassword');
					$keterangan=$this->input->post('xketengan');
				}else{
					$this->model_pengguna->simpan_agenda($nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan;
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/agenda');

				}
								
			
		}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/pengguna');
		}
}else{
	$agendad=$this->input->post('xnama');
	$tanggal=$this->input->post('xjenkel');
	$tempat=$this->input->post('xusername');
	$waktu=$this->input->post('xpassword');
	$keterangan=$this->input->post('xketengan')
		$this->model_pengguna->simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
		echo $this->session->set_flashdata('msg','success');
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

				$agendad=$this->input->post('xnama');
				$tanggal=$this->input->post('xjenkel');
				$tempat=$this->input->post('xusername');
				$waktu=$this->input->post('xpassword');
				$keterangan=$this->input->post('xketengan');
			}else{
				$this->model_pengguna->update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/pengguna');
			}

		}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/pengguna');
		}

	}else{
	$agendad=$this->input->post('xnama');
	$tanggal=$this->input->post('xjenkel');
	$tempat=$this->input->post('xusername');
	$waktu=$this->input->post('xpassword');
	$keterangan=$this->input->post('xketengan');
	}

}else{
	$this->model_pengguna->update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	echo $this->session->set_flashdata('msg','info');
	redirect('admin/pengguna');
}


function hapus_pengguna(){

	$kode=$this->input->post('kode');
	$data=$this->model_pengguna->get_pengguna_login($kode);
	$q=$data->row_array();
	$p=$q['pengguna_photo'];
	$path=base_url().'assets/images/'.$p;
	delete_files($path);
	$this->model_pengguna->hapus_pengguna($kode);
	echo $this->session->set_flashdata('msg','success-hapus');
	redirect('admin/pengguna');
}

function reset_password(){
   
	$id=$this->uri->segment(4);
	$get=$this->model_pengguna->getusername($id);
	if($get->num_rows()>0){
		$a=$get->row_array();
		$b=$a['pengguna_username'];
	}
	$pass=rand(123456,999999);
	$this->model_pengguna->resetpass($id,$pass);
	echo $this->session->set_flashdata('msg','show-modal');
	echo $this->session->set_flashdata('uname',$b);
	echo $this->session->set_flashdata('upass',$pass);
	redirect('admin/pengguna');

}




	


	

