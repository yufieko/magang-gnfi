<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function doit()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
