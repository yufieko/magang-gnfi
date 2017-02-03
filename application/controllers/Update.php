<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Dashboard_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		redirect('','refresh');
	}

	public function edit($id)
	{
		if(empty($id)) {
			die('id belum diisi');
		}

		// $this->load->model('user_model');
		$user = $this->user_model->select($id);

		if(empty($user)) 
		{
			die('user tidak ditemukan');
		}

		$data['user'] = $user;
		$this->load->view('update',$data);
	}

	public function save()
	{
		$this->form_validation->set_rules('user_id', 'user_id', 'required|trim|is_natural');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
		if($this->form_validation->run() === true) 
		{
			$user_id = $this->input->post('user_id');
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$data=array(
				'name' => $name,
				'username' => $username,
				'email' => $email
			);
			// $this->load->model('user_model');
			$cek = $this->user_model->update($user_id,$data);
			if($cek) 
			{
				echo "berhasil di edit : " . $cek;
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
