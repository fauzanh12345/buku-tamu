<?php

class Model_daftartamu extends CI_Model{
	
	function tampil_daftartamu(){
        $hasil = $this->db->query("SELECT * FROM buku_tamu INNER JOIN department on department.id_dep = buku_tamu.id_dep WHERE Status = 0");
        return $hasil;
    }

    function get($id){
        $param = array('id'=>$id);
        return $this->db->get_where('buku_tamu',$param);
    }
	
	function detail(){
        $data=array( 
					'status'   => $this->input->post('status'),
					'alasan_tolak' => $this->input->post('alasan_tolak')
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('buku_tamu',$data);
    }

    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('buku_tamu');
    }
}
