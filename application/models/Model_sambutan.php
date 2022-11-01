<?php 
class Model_sambutan extends CI_Model{

function get_all_sambutan(){
		$hsl=$this->db->query("SELECT * FROM sambutan");
		return $hsl;
	}
//simpan padahal saya andriansyah buat mode edit 
	function simpan_sambutan($id,$sambutan,$photo,$kepsek){
		$hsl=$this->db->query("UPDATE sambutan SET sambutan_isi='$sambutan',sambutan_photo='$photo', nama_kepala_sekolah='$kepsek' WHERE sambutan_id='$id'");
		return $hsl;
	}

	function simpan_sambutan_tanpa_img($id,$sambutan){
		$hsl=$this->db->query("UPDATE sambutan SET sambutan_isi='$sambutan', nama_kepala_sekolah='$kepsek' WHERE sambutan_id='$id'");
		return $hsl;
	}

}