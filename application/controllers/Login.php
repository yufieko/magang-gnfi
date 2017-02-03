<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('v_login');
		$this->load->model('user_model');
	}

	public function halo($string)
	{
		echo "Haloo " . $string;
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
		      'username' => $username,
		      'password' => secure_password($password)
		    );

		    $cek = $this->user_model->select_where($data);
	    
		    if (!empty($cek)) {

        		$data_session['id'] = $cek->id;
				$data_session['name'] = $cek->name;
				$data_session['username'] = $cek->username;


		      	$this->session->set_userdata($data_session);
		      	redirect('read','refresh');
	  		} else {
				die('username atau password anda salah');
			}
		}
		else
		{
			echo validation_errors();
		}

	}   

}
