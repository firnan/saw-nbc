<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Model extends CI_Model {

	public function edit($id)
	{
		$query = $this->db->get_where('proposal', array('id' => $id));
		return $query;
	}

	public function update($id, $data)
	{
		$this->db->where('users_id', $id);
		$query = $this->db->update('proposal', $data);
	}	

	public function Menampilkan()
	{
		//$users_id = $this->db->('users_id');
		//$data = $this->db->get_where("users", array('users_id' => $users_id));
		//$data = $this->db->query("SELECT * FROM users WHERE users_id = ");
		//return $data->result_object();
		$query = $this->db->select("*")
				 ->from('users')
				 ->where('users_id', '')
				 ->get();
		return $query->result();
	}

}

/* End of file crud_model.php */
/* Location: ./application/models/crud_model.php */

