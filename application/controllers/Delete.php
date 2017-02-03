<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller

 {
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		redirect('','refresh');
	}

	public function view($id)
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
		$this->load->view('delete',$data);
	}

	public function doit()
	{
		$this->form_validation->set_rules('user_id', 'user_id', 'required|trim|is_natural');
		$this->form_validation->set_rules('username', 'username', 'required|trim|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
		if($this->form_validation->run() === true) 
		{
			$user_id = $this->input->post('user_id');
			$username = $this->input->post('username');
			$email = $this->input->post('email');

			// $this->load->model('user_model');
			$cek = $this->user_model->delete($user_id);
			if($cek) 
			{
				echo $username . " berhasil dihapus";
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
