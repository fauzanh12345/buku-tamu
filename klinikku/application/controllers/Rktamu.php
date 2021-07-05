<?php

class Rktamu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('Model_rktamu');
    }

    function index()
    {
		$data['data'] = $this->Model_rktamu->tampil_rktamu();
        $this->template->load('template', 'rktamu/index', $data);
    }
	
	function detail()
    {
        $id     = $this->uri->segment(3);
		$data['row'] = $this->db->join('department', 'department.id_dep = buku_tamu.id_dep')
          ->get_where('buku_tamu', array('id' => $id))->row_array();
        $this->template->load('template', 'rktamu/detail', $data);
    }

    function delete()
    {
        $id     = $this->uri->segment(3);
        $this->Model_rktamu->hapus($id);
        redirect('rktamu/index');
    }
	
}
