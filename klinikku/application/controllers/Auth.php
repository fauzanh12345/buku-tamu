<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function login()
	{
		$this->load->view('auth/login');
    }
    
    public function proses_login()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('index.php/auth/login'); // LOGIN
        
        } else {

            $username = $this->input->post('username');
            $pass = $this->input->post('password');
            $cek_login = $this->auth_model->cek_login($username); 
                
            if($cek_login == FALSE)
            {
                echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
            
            } else {
            
                if(password_verify($pass, $cek_login->password)){
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('username', $cek_login->username);
                    $this->session->set_userdata('level', $cek_login->level);
                    
                    redirect('dashboard');
                        
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo '<script>alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('index.php/auth/login').'";
        </script>';
    }
}
