<?php

class Tamutolak extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('Model_tamutolak');
    }

    function index()
    {
		$data['data'] = $this->Model_tamutolak->tampil_tamutolak();
        $this->template->load('template', 'tamutolak/index', $data);
    }
	
	function detail()
    {
        $id     = $this->uri->segment(3);
		$data['row'] = $this->db->join('department', 'department.id_dep = buku_tamu.id_dep')
          ->get_where('buku_tamu', array('id' => $id))->row_array();
        $this->template->load('template', 'tamutolak/detail', $data);
    }

    function delete()
    {
        $id     = $this->uri->segment(3);
        $this->Model_tamutolak->hapus($id);
        redirect('tamutolak/index');
    }
	
}
