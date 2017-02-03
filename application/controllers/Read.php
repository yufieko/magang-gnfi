<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read extends Dashboard_Controller {

	public function index()
	{
		$this->load->model('user_model');

		$data['users'] = $this->user_model->get_list();

		$this->load->view('read',$data);
	}

}
