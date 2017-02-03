<?php

class User_model extends CI_Model {
	protected $table = "user";
  	protected $primaryKey = "id";

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data)
	{
		$this->db->insert($this->table,$data);
		$result = $this->db->insert_id();
		return $result;
	}

	public function select($id)
	{
		$query = $this->db->select()
		    ->from($this->table)
		    ->where('id',$id)
		    ->limit(1)
		    ->get();

		return ($query->num_rows() > 0 ? $query->row() : false);
	}

	public function select_where($where)
	{
		$query = $this->db->select()
		    ->from($this->table)
		    ->where($where)
		    ->limit(1)
		    ->get();

		return ($query->num_rows() > 0 ? $query->row() : false);
	}

	public function delete($id)
	{
		$result = $this->db->delete($this->table, array('id' => $id));
		return $result;
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$result = $this->db->update($this->table,$data);
		return $result;
	}

	public function get_list()
	{
		$query = $this->db->select()
		    ->from($this->table)
		    ->get();

		return ($query->num_rows() > 0 ? $query->result() : false);
	}

}
