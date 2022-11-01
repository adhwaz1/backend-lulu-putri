<?php
class Ekskul extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('model_ekskul');
		$this->load->library('upload');
	}


	function index(){
		$x['ekskul']=$this->model_ekskul->get_all_ekskul();
		$this->load->view('admin/v_ekskul',$x);
	}

	function simpan_ekskul(){
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
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$judul=$this->input->post('ekskul_nama');
							$deskripsi=$this->input->post('ekskul_deskripsi');
							$this->model_ekskul->simpan_ekskul($judul,$deskripsi,$photo);
							
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/ekskul');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/ekskul');
	                }
	                 
	            }else{
					$judul=$this->input->post('ekskul_nama');
							$deskripsi=$this->input->post('ekskul_deskripsi');

					$this->model_ekskul->simpan_ekskul_tanpa_img($judul,$deskripsi);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/ekskul');
				}
				
		
	}

	function update_ekskul(){
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
					$config['width']= 300;
					$config['height']= 300;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$gambar=$this->input->post('gambar');
					$path='./assets/images/'.$gambar;
					unlink($path);

					$photo=$gbr['file_name'];
					$kode=$this->input->post('kode');
					$judul=$this->input->post('ekskul_nama');
					$deskripsi=$this->input->post('ekskul_deskripsi');

					$this->model_ekskul->update_ekskul($kode,$judul,$deskripsi,$photo);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/ekskul');
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/ekskul');
			}
			
		}else{
					
					$kode=$this->input->post('kode');
					$judul=$this->input->post('ekskul_nama');
					$deskripsi=$this->input->post('ekskul_deskripsi');

					$this->model_ekskul->update_ekskul_tanpa_img($kode,$judul,$deskripsi);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/ekskul');
		} 
	}
	function hapus_ekskul(){
		$kode=$this->input->post('kode');
		$this->model_ekskul->hapus_ekskul($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/ekskul');
	}

}