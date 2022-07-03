<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilUser extends CI_Controller {
	public function Profil()
	{
		$this->load->view('profil/profilku');
	}
}
