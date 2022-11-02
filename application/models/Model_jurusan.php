<?php

class Model_jurusan extends CI_Model
{

	function get_all_jurusan()
	{
		$hsl = $this->db->query("SELECT jurusan.* FROM jurusan");
		return $hsl;
	}

	function simpan_jurusan($judul, $deskripsi, $photo)
	{
		$author = $this->session->userdata('nama');
		$hsl = $this->db->query("INSERT INTO jurusan(jurusan_judul,jurusan_deskripsi,jurusan_author,jurusan_photo) VALUES ('$judul','$deskripsi','$author','$photo')");
		return $hsl;
	}

	function simpan_jurusan_tanpa_img($judul, $deskripsi)
	{
		$author = $this->session->userdata('nama');
		$hsl = $this->db->query("INSERT INTO jurusan(jurusan_judul,jurusan_deskripsi,jurusan_author) VALUES ('$judul','$deskripsi','$author')");
		return $hsl;
	}

	function update_jurusan($kode, $judul, $deskripsi, $photo)
	{
		$author = $this->session->userdata('nama');
		$hsl = $this->db->query("UPDATE jurusan SET jurusan_judul='$judul',jurusan_deskripsi='$deskripsi',jurusan_author='$author',jurusan_photo='$photo' where jurusan_id='$kode'");
		return $hsl;
	}

	function update_jurusan_tanpa_img($kode, $judul, $deskripsi)
	{
		$author = $this->session->userdata('nama');
		$hsl = $this->db->query("UPDATE jurusan SET jurusan_judul='$judul',jurusan_deskripsi='$deskripsi',jurusan_author='$author' where jurusan_id='$kode'");
		return $hsl;
	}

	function hapus_jurusan($kode)
	{
		$hsl = $this->db->query("DELETE FROM jurusan WHERE jurusan_id='$kode'");
		return $hsl;
	}

	//Untuk Tampilan Front-end
	function get_jurusan_home()
	{
		$hsl = $this->db->query("SELECT jurusan_id,jurusan_judul,jurusan_deskripsi,jurusan_author, jurusan_photo FROM jurusan ORDER BY jurusan_id ASC");
		return $hsl;
	}

	function get_jurusan_home_aja()
	{
		$hsl = $this->db->query("SELECT jurusan_id,jurusan_judul,jurusan_deskripsi,jurusan_author, jurusan_photo FROM jurusan ORDER BY jurusan_id ASC");
		return $hsl;
	}


	function jurusan_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT jurusan_id,jurusan_judul,jurusan_deskripsi,jurusan_author, jurusan_photo FROM jurusan ORDER BY jurusan_id ASC limit $offset,$limit");
		return $hsl;
	}


}
