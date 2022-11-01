<?php
class Model_tulisan extends CI_Model{

	
	function simpan_tulisan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tulisan(tulisan_judul,tulisan_isi,tulisan_kategori_id,tulisan_kategori_nama,tulisan_img_slider,tulisan_pengguna_id,tulisan_author,tulisan_gambar,tulisan_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function update_tulisan($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_kategori_id='$kategori_id',tulisan_kategori_nama='$kategori_nama',tulisan_img_slider='$imgslider',tulisan_pengguna_id='$user_id',tulisan_author='$user_nama',tulisan_gambar='$gambar',tulisan_slug='$slug' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function update_tulisan_tanpa_img($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_kategori_id='$kategori_id',tulisan_kategori_nama='$kategori_nama',tulisan_img_slider='$imgslider',tulisan_pengguna_id='$user_id',tulisan_author='$user_nama',tulisan_slug='$slug' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function hapus_tulisan($kode){
		$hsl=$this->db->query("delete from tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan where tulisan_img_slider='1' ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function get_berita_home(){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan ORDER BY tulisan_id DESC limit 3");
		return $hsl;
	}

	function berita_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan ORDER BY tulisan_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita(){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function cari_berita($keyword){
		$hsl=$this->db->query("SELECT tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tulisan WHERE tulisan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_tulisan_id($kode){
		$hsl=$this->db->query("SELECT * FROM komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
