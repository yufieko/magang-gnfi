<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
		if(empty($this->session->username)){
			redirect('login','refresh');
		}
  	}

}