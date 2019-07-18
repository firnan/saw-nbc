<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	

	public function getData()
		{
			$data = $this->db->get('mahasiswa');
			return $data->result_object();
		}

	public function get_all()
  {
    $this->db->select('*');
    $this->db->from('image');
    return $this->db->get()->result();
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('image')->row();
  }

  public function insert($data)
  {
    $this->db->insert('proposal', $data);
  }
	
	//fetch all pictures from db
	function get_all_pics(){
		$all_pics = $this->db->get('proposal');
		return $all_pics->result();
	}

	//save picture data to dbs
	function store_proposal_data($data){
		$insert_data['nim'] = $data['nim'];
		$insert_data['judul'] = $data['judul'];
		//$insert_data['konsentrasi'] = $data['konsentrasi'];
		$insert_data['proposal'] = $data['proposal'];
		$insert_data['pembimbing_1'] = $data['pembimbing_1'];
		$insert_data['pembimbing_2'] = $data['pembimbing_2'];
		$insert_data['status'] = $data['status'];
		$insert_data['keterangan'] = $data['keterangan'];

		$query = $this->db->insert('proposal', $insert_data);
	}

	function store_laporan_akhir_data($data){
		$insert_data['namalengkap'] = $data['namalengkap'];
		$insert_data['nim'] = $data['nim'];
		$insert_data['judul'] = $data['judul'];
		$insert_data['pembimbing1'] = $data['pembimbing1'];
		$insert_data['pembimbing2'] = $data['pembimbing2'];
		$insert_data['lap_akhir'] = $data['lap_akhir'];
		$insert_data['nilai'] = $data['nilai'];

		$query = $this->db->insert('laporan_akhir', $insert_data);
	}
	
	public function getData_proposal() {
			$data = $this->db->get('proposal');
			return $data->result_object();
		}

	public function getData_pem() {
			$data = $this->db->get('pembimbing');
			return $data->result_object();
			//$hasil=$this->db->query("SELECT jml_p1, count(jml_p1) as total FROM pembimbing group by jml_p1");
			//$hasil = $this->db->query("SELECT count(*) as jml_p1 FROM pembimbing WHERE jml_p1 = '$nama_dosen'");
			//$hasil=$this->db->query("SELECT pembimbing.nama_dosen, pembimbing.jabfung, pembimbing.jml_p1, pembimbing.jml_p2, pembimbing.total, proposal.pembimbing_1, proposal.pembimbing_2 FROM proposal JOIN pembimbing ON pembimbing.id_pembimbing = proposal.id_mhs");
			//return $hasil->result_object();
		}

	public function tampil_pembimbing_1()
	{
		
		//$query = $this->db->where("id_mhs", $id_mhs)->get("proposal");
		//$query = $this->db->query("SELECT count(*) as pembimbing_1 FROM proposal WHERE pembimbing_1 = '$nama_dosen'");
		$query = $this->db->query("select pembimbing_1, count(*) as total from proposal group by pembimbing_1");
		//$query2 = $this->db->query("select pembimbing_2, count(*) as total from proposal group by pembimbing_2");

		if($query){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function tampil_pembimbing_2()
	{
		
		//$query = $this->db->where("id_mhs", $id_mhs)->get("proposal");
		//$query = $this->db->query("SELECT count(*) as pembimbing_1 FROM proposal WHERE pembimbing_1 = '$nama_dosen'");
		//$query = $this->db->query("select pembimbing_1, count(*) as total from proposal group by pembimbing_1");
		$query = $this->db->query("select pembimbing_2, count(*) as total from proposal group by pembimbing_2");

		if($query){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function store_proposal_proses($data){
		$insert_data['nama_file'] = $data['nama_file'];

		$query = $this->db->insert('dokumen', $insert_data);
	}
}


/* End of file data_model.php */
/* Location: ./application/models/data_model.php */