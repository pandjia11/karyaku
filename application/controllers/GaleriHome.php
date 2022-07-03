<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriHome extends CI_Controller {
	public function index()
	{
		$this->load->view('galeri/index');
	}
}
