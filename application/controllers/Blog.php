<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_tulisan');
		
	}
	function index(){
		$jum=$this->model_tulisan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=4;
        $config['base_url'] = base_url() . 'blog/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
						$config['full_tag_open'] = '<ul class="pagination-center">';
						$config['full_tag_close'] = '</ul>';
						$config['num_tag_open'] = '<li>';
						$config['num_tag_close'] = '</li>';
						$config['cur_tag_open'] = '<li class="active"><a href="#">';
						$config['cur_tag_close'] = '</a></li>';
						$config['prev_tag_open'] = '<li>';
						$config['prev_tag_close'] = '</li>';
						$config['next_tag_open'] = '<li>';
						$config['next_tag_close'] = '</li>';
						$config['last_tag_open'] = '<li>';
						$config['last_tag_open'] = '<li>';
						$config['first_tag_open'] = '<li>';
						$config['first_tag_open'] = '<li>';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->model_tulisan->berita_perpage($offset,$limit);
						$x['category']=$this->db->get('kategori');
						$x['populer']=$this->db->query("SELECT * FROM tulisan ORDER BY tulisan_views DESC LIMIT 5");
						$x['header'] = $this->load->view('tampilan_frontend/header','',TRUE);
			
						$this->load->view('tampilan_frontend/view_blog',$x);
	}
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tulisan', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->model_tulisan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->model_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('kategori');
			$x['populer']=$this->db->query("SELECT * FROM tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$x['header'] = $this->load->view('tampilan_frontend/header','',TRUE);
			
			$this->load->view('tampilan_frontend/view_blog_detail',$x);
		}else{
			redirect('artikel');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('kategori');
 			 $x['populer']=$this->db->query("SELECT * FROM tulisan ORDER BY tulisan_views DESC LIMIT 5");
			 $this->load->view('tampilan_frontend/view_blog',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('artikel');
		 }
	}

    

		function komentar(){
				$kode = $this->input->post('id');
				$data=$this->model_tulisan->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['tulisan_slug'];
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$komentar = $this->input->post('komentar');
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('artikel/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_tulisan_id' => $kode
					);

					$this->db->insert('komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Anda akan tampil setelah di acc.</div>');
					redirect('artikel/'.$slug);
				}
		}

}
