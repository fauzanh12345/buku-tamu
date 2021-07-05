<?php

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->cek_login();
        $this->load->model('model_user');
    }

    function index()
    {
        $data['data'] = $this->model_user->tampil_user();
        $this->template->load('template', 'user/index', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_user->tambah_user();
            redirect('user/index');
        } else {
            $this->template->load('template', 'user/tambah');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_user->edit();
            redirect('user/index');
        } else {
            $id = $this->uri->segment(3);
            $data['row'] = $this->model_user->get($id)->row_array();
            $this->template->load('template', 'user/edit', $data);
        }
    }

    function detail()
    {
        $id     = $this->uri->segment(3);
        $data['row']   = $this->db->get_where('users', array('id' => $id))->row_array();
        $this->template->load('template', 'user/detail', $data);
    }

    function delete()
    {
        $id     = $this->uri->segment(3);
        $this->model_user->hapus($id);
        redirect('user/index');
    }
}
