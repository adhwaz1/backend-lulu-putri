<?php
class Model_login extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("SELECT * FROM pengguna WHERE pengguna_username='$u' AND pengguna_password=md5('$p')");
        return $hasil;
    }

}
