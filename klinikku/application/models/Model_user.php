<?php

class Model_user extends CI_Model{
	

    function tampil_user(){
        $hasil = $this->db->query("select * from users order by id asc");
        return $hasil;
    }

    function tambah_user(){
        $data=array( 
                    'nama'     => $this->input->post('nama'),
                    'alamat'   => $this->input->post('alamat'),
                    'telp'   => $this->input->post('notelp'),
					'username'   => $this->input->post('username'),
					'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
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
					'nama'     => $this->input->post('nama'),
                    'alamat'   => $this->input->post('alamat'),
                    'telp'   => $this->input->post('notelp'),
					'username'   => $this->input->post('username'),
					'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'level'   => $this->input->post('level')
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('users',$data);
    }

    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
}
