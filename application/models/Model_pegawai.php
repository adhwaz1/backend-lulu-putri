<?php

class Model_pegawai extends CI_Model
{

	function get_all_pegawai()
	{
		$hsl = $this->db->query("SELECT pegawai.* FROM pegawai ");
		return $hsl;
	}

	function simpan_pegawai($nip, $nama, $jenkel, $jabatan, $photo)
	{
		$hsl = $this->db->query("INSERT INTO pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_jabatan,pegawai_photo) VALUES ('$nip','$nama','$jenkel','$jabatan','$photo')");
		return $hsl;
	}

	function simpan_pegawai_tanpa_img($nip, $nama, $jenkel, $jabatan)
	{
		$hsl = $this->db->query("INSERT INTO pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_jabatan) VALUES ('$nip','$nama','$jenkel','$jabatan')");
		return $hsl;
	}

	function update_pegawai($kode, $nip, $nama, $jenkel, $jabatan, $photo)
	{
		$hsl = $this->db->query("UPDATE pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_jabatan='$jabatan',pegawai_photo='$photo' WHERE pegawai_id='$kode'");
		return $hsl;
	}

	function update_pegawai_tanpa_img($kode, $nip, $nama, $jenkel, $jabatan)
	{
		$hsl = $this->db->query("UPDATE pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_jabatan='$jabatan' WHERE pegawai_id='$kode'");
		return $hsl;
	}

	function hapus_pegawai($kode)
	{
		$hsl = $this->db->query("DELETE FROM pegawai WHERE pegawai_id='$kode'");
		return $hsl;
	}

//buat frontend

	function pegawai()
	{
		$hsl = $this->db->query("SELECT * FROM pegawai");
		return $hsl;
	}

	function pegawai_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT * FROM pegawai  limit $offset,$limit");
		return $hsl;
	}

}
