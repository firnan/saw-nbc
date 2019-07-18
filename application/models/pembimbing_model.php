<?php
class pembimbing_model extends CI_Model{

	function pembimbing_list(){
		$hasil=$this->db->query("SELECT * FROM pembimbing");
		return $hasil->result();
	}

	function simpan_pembimbing($id_pembimbing,$nama_dosen,$jabfung,$pembimbing_1,$pembimbing_2,$total){
		$hasil=$this->db->query("INSERT INTO pembimbing (nama_dosen,jabfung,pembimbing_1,pembimbing_2,total)VALUES($nama_dosen','$jabfung','$pembimbing_1','$pembimbing_2','$total')");
		return $hasil;
	}

	function get_pembimbing_by_id($id_pembimbing){
		$hsl=$this->db->query("SELECT * FROM pembimbing WHERE id_pembimbing='$id_pembimbing'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nama_dosen' => $data->nama_dosen,
					'jabfung' => $data->jabfung,
					'pembimbing_1' => $data->pembimbing_1,
					'pembimbing_2' => $data->pembimbing_2,
					'total' => $data->total,
					);
			}
		}
		return $hasil;
	}

	function update_pembimbing($id_pembimbing,$nama_dosen,$jabfung,$pembimbing_1,$pembimbing_2,$total){
		$hasil=$this->db->query("UPDATE pembimbing SET nama_dosen='$nama_dosen',jabfung='$jabfung',pembimbing_1='$pembimbing_1',pembimbing_2='$pembimbing_2',total='$total' WHERE nama_dosen='$nama_dosen'");
		return $hasil;
	}

	function hapus_pembimbing($id_pembimbing){
		$hasil=$this->db->query("DELETE FROM pembimbing WHERE id_pembimbing='$id_pembimbing'");
		return $hasil;
	}
	
}