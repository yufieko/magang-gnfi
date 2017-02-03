<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function tambah()
	{
		$data['nama'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['created'] = $this->input->post('created');

		$this->User_model->insert($this->user, $data);
		redirect('');
	}

}

/* End of file Create.php */
/* Location: ./application/controllers/Create.php */