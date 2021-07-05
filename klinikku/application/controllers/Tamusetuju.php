<?php

class Tamusetuju extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('Model_tamusetuju');
    }

    function index()
    {
		$data['data'] = $this->Model_tamusetuju->tampil_tamusetuju();
        $this->template->load('template', 'tamusetuju/index', $data);
    }
	
	function detail()
    {
		if (isset($_POST['submit'])) {
            $this->Model_tamusetuju->detail();
            redirect('tamusetuju/index');
        } else {
            $id = $this->uri->segment(3);
			$data['row'] = $this->db->join('department', 'department.id_dep = buku_tamu.id_dep')
          ->get_where('buku_tamu', array('id' => $id))->row_array();
            $this->template->load('template', 'tamusetuju/detail', $data);
        }
    }

    function delete()
    {
        $id     = $this->uri->segment(3);
        $this->Model_tamusetuju->hapus($id);
        redirect('tamusetuju/index');
    }
	
}
