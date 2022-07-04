<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
    }
	public function index()
	{
		$this->load->view('user/login');
	}

    public function daftar()
	{
		$this->load->view('user/register');
	}

    public function aksi_login(){
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        $dataPenunjuk = array(
            'username' => $user,
            'password' => $pass,
        );
        $data = count($this->modelku->getNoPengguna("user_karyaku",$dataPenunjuk));
        if($data > 0){
            $data_session = array(
                'nama' => $user,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url()."galerihome/index");
        }else{
            redirect(base_url());
        }
    }

    public function aksi_daftar(){
        $this->modelku->TambahUser();
        redirect(base_url()."user/index", 'refresh');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }
}