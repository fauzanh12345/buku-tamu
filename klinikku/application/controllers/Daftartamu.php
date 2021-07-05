<?php

class Daftartamu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('Model_daftartamu');
    }

    function index()
    {
		$data['data'] = $this->Model_daftartamu->tampil_daftartamu();
        $this->template->load('template', 'daftartamu/index', $data);
    }
	
	function detail()
    {
		if (isset($_POST['submit'])) {
            $this->Model_daftartamu->detail();
            redirect('daftartamu/index');
        } else {
            $id = $this->uri->segment(3);
			$data['row'] = $this->db->join('department', 'department.id_dep = buku_tamu.id_dep')
          ->get_where('buku_tamu', array('id' => $id))->row_array();
            $this->template->load('template', 'daftartamu/detail', $data);
        }
    }

    function delete()
    {
        $id     = $this->uri->segment(3);
        $this->Model_daftartamu->hapus($id);
        redirect('daftartamu/index');
    }
	
}
