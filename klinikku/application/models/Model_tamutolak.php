<?php

class Model_tamutolak extends CI_Model{
	
	function tampil_tamutolak(){
        $hasil = $this->db->query("SELECT * FROM buku_tamu INNER JOIN department on department.id_dep = buku_tamu.id_dep WHERE Status = 3");
        return $hasil;
    }

    function get($id){
        $param = array('id'=>$id);
        return $this->db->get_where('buku_tamu',$param);
    }

    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('buku_tamu');
    }
}
