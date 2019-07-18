<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

 	function proseslogin_dosen($user, $pass){
  		$this->db->where('email',$user);
  		$this->db->where('password',$pass);
  		return $this->db->get('dosen')->row();
 	}

 	function proseslogin_mhs($user, $pass){
  		$this->db->where('email',$user);
  		$this->db->where('password',$pass);
  		return $this->db->get('mahasiswa')->row();
 	} 	
}