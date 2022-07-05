<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
        $this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
            redirect(base_url());
        }
    }
	public function upload()
	{
		$this->load->view('upload/upload');
	}
}