<?php

class dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('Model_dashboard');
    }

    function index()
    {
        $data['daftartamu'] = $this->Model_dashboard->tampil_daftartamu();
		$data['tamusetuju'] = $this->Model_dashboard->tampil_tamusetuju();
		$data['tamutolak'] = $this->Model_dashboard->tampil_tamutolak();
		$data['rktamu'] = $this->Model_dashboard->tampil_rktamu();
        $this->template->load('template', 'dashboard/dboard', $data);
    }
}
