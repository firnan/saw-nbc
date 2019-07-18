<?php
class lapakhir_model extends CI_Model{

	function lapakhir_list(){
		$hasil=$this->db->query("SELECT * FROM laporan_akhir");
		return $hasil->result();
	}

	function simpan_lapakhir($nim,$namalengkap,$judul,$pembimbing1,$pembimbing2,$lap_akhir,$nilai,$upload_at){
		$hasil=$this->db->query("INSERT INTO laporan_akhir (nim,namalengkap,judul,pembimbing1,pembimbing2,lap_akhir,nilai,upload_at)VALUES('$nim','$namalengkap','$judul','$pembimbing1','$pembimbing2','$lap_akhir','$nilai','$upload_at')");
		return $hasil;
	}

	function get_lapakhir_by_nim($nim){
		$hsl=$this->db->query("SELECT * FROM laporan_akhir WHERE nim='$nim'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nim' => $data->nim,
					'namalengkap' => $data->namalengkap,
					'judul' => $data->judul,
					'pembimbing1' => $data->pembimbing1,
					'pembimbing2' => $data->pembimbing2,
					'lap_akhir' => $data->lap_akhir,
					'nilai' => $data->nilai,
					'upload_at' => $data->upload_at,
					);
			}
		}
		return $hasil;
	}

	function update_lapakhir($nim,$namalengkap,$judul,$pembimbing1,$pembimbing2,$lap_akhir,$nilai,$upload_at){
		$hasil=$this->db->query("UPDATE laporan_akhir SET nim='$nim',namalengkap='$namalengkap',judul='$judul',pembimbing1='$pembimbing1',pembimbing2='$pembimbing2',lap_akhir='$lap_akhir',nilai='$nilai',upload_at='$upload_at' WHERE nim='$nim'");
		return $hasil;
	}

	function hapus_lapakhir($nim){
		$hasil=$this->db->query("DELETE FROM laporan_akhir WHERE nim='$nim'");
		return $hasil;
	}
	
}