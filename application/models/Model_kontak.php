<?php

class Model_kontak extends CI_Model
{

	function kirim_pesan($nama, $email, $kontak, $pesan)
	{
		$hsl = $this->db->query("INSERT INTO inbox(inbox_nama,inbox_email,inbox_kontak,inbox_pesan) VALUES ('$nama','$email','$kontak','$pesan')");
		return $hsl;
	}

	function get_all_inbox()
	{
		$hsl = $this->db->query("SELECT inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM inbox ORDER BY inbox_id DESC");
		return $hsl;
	}

	function hapus_kontak($kode)
	{
		$hsl = $this->db->query("DELETE FROM inbox WHERE inbox_id='$kode'");
		return $hsl;
	}

	function update_status_kontak()
	{
		$hsl = $this->db->query("UPDATE inbox SET inbox_status='0'");
		return $hsl;
	}
}
