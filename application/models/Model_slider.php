<?php 
class Model_slider extends CI_Model{

	function get_all_slider(){
		$hsl=$this->db->query("SELECT * FROM slider");
		return $hsl;
	}
	function simpan_slider($nama,$photo){
		$hsl=$this->db->query("INSERT INTO slider (slider_nama,slider_photo) VALUES ('$nama','$photo')");
		return $hsl;
	}

	function simpan_slider_tanpa_img($nama){
		$hsl=$this->db->query("INSERT INTO slider (slider_nama) VALUES ('$nama')");
		return $hsl;
	}

	function update_slider($id,$nama,$photo){
		$hsl=$this->db->query("UPDATE slider SET slider_nama='$nama',slider_photo='$photo' WHERE slider_id='$id'");
		return $hsl;
	}

	function update_slider_tanpa_img($id,$nama){
		$hsl=$this->db->query("UPDATE slider SET slider_nama='$nama' WHERE slider_id='$id'");
		return $hsl;
	}
	function hapus_slider($id){
		$hsl=$this->db->query("DELETE FROM slider WHERE slider_id='$id'");
		return $hsl;
	}
	




	

}