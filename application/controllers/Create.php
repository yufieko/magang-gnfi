<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends Dashboard_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	function index(){
        $this->load->view('create');
	}

	/**
	* fungsi untuk tambah user
	*/
	public function tambah()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[20]'); 

		if($this->form_validation->run() === true) 
		{
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = secure_password($this->input->post('password'));

			$data=array(
				'name' => $name,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'created' => date("Y-m-d H:i:s")
			);

			// $this->load->model('user_model');
			$cek = $this->user_model->insert($data);

			if($cek) 
			{
				echo "berhasil masuk dengan id : " . $cek;
			}
			else 
			{
				echo "gagal bro";
			}
		}
		else
		{
			echo validation_errors();
		}
		
		// redirect('');
	}

}

/* End of file Create.php */
/* Location: ./application/controllers/Create.php */