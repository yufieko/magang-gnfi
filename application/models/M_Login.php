<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		
	}

	function cek_login($table,$data)
  	{
        return $this->db->get_where($table,$data);
  	}

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */