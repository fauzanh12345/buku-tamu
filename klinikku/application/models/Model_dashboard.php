<?php

class Model_dashboard extends CI_Model{

    function tampil_daftartamu(){
        $hasil = $this->db->query('select * from buku_tamu where status = "0"');
		$daftartamu = $hasil->num_rows();
        return $daftartamu;
    }
	
	function tampil_tamusetuju(){
        $hasil = $this->db->query('select * from buku_tamu where status = "1"');
        $tamusetuju = $hasil->num_rows();
        return $tamusetuju;
    }
	
	function tampil_tamutolak(){
        $hasil = $this->db->query('select * from buku_tamu where status = "3"');
        $tamutolak = $hasil->num_rows();
        return $tamutolak;
    }
	
	function tampil_rktamu(){
        $hasil = $this->db->query('select * from buku_tamu where status = "2"');
        $rktamu = $hasil->num_rows();
        return $rktamu;
    }

    function tambah_mahasiswa(){
        $data=array( 
                    'nama'     => $this->input->post('nama'),
                    'alamat'   => $this->input->post('alamat'),
                    'telp'   => $this->input->post('notelp'),
					'username'   => $this->input->post('username'),
					'password'   => $this->input->post('password'),
					'level'   => $this->input->post('level')
        );
        $this->db->insert('users',$data);
    }

    function get($id){
        $param = array('id'=>$id);
        return $this->db->get_where('users',$param);
    }

    function edit(){
        $data=array( 
            'namamhs'     => $this->input->post('nama'),
            'alamatmhs'   => $this->input->post('alamat'),
            'notelp'   => $this->input->post('notelp')
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('users',$data);
    }

    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
}
