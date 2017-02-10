<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if(!empty($this->session->username)){
			redirect('read','refresh');
		}
	}

	public function index()
	{
		$this->load->view('v_login');
		$this->load->model('user_model');
	}

	public function halo($string)
	{
		echo "Haloo " . $string;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function aksi_login()
  	{
  		$this->load->model('user_model');
  		
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run() === true ) {
			$username = $this->input->post('username');
	    	$password = $this->input->post('password');
		    $data = array(
		      'username' => $username
		    );

		    $cek = $this->user_model->select_where($data);
	    
		    if (!empty($cek) && password_verify($password,$cek->password)) {

        		$data_session['id'] = $cek->id;
				$data_session['name'] = $cek->name;
				$data_session['username'] = $cek->username;


		      	$this->session->set_userdata($data_session);
		      	// redirect('read','refresh');
		      	$result = array(
		      		'status' => true,
		      		'message' => 'Berhasil login',
		      		'redirect' => site_url('read')
		      	);
	  		} else {
				// die('username atau password anda salah');
				$result = array(
		      		'status' => false,
		      		'message' => 'Username atau password anda salah'
		      	);
			}
		}
		else
		{
			$result = array(
	      		'status' => false,
	      		'message' => validation_errors()
	      	);
		}

		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($result));

	}   

}
