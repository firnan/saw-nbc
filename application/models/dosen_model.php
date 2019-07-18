<?php
class dosen_model extends CI_Model{

	function dosen_list(){
		$hasil=$this->db->query("SELECT * FROM dosen");
		return $hasil->result();
	}

	function simpan_dosen($nip,$kode_dosen,$jabfung,$konsentrasi,$email,$password,$notelp,$status,$level){
		$hasil=$this->db->query("INSERT INTO dosen (nip,kode_dosen,nama_dosen,jabfung,konsentrasi,email,password,notelp,status,level)VALUES('$nip','$nama_dosen','$jabfung','$konsentrasi','$email','$password','$notelp','$status','$level')");
		return $hasil;
	}

	function get_dosen_by_nip($nip){
		$hsl=$this->db->query("SELECT * FROM dosen WHERE nip='$nip'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip' => $data->nip,
					'nama_dosen' => $data->nama_dosen,
					'jabfung' => $data->jabfung,
					'konsentrasi' => $data->konsentrasi,
					'email' => $data->email,
					'password' => $data->password,
					'notelp' => $data->notelp,
					'status' => $data->status,
					'level' => $data->level,
					);
			}
		}
		return $hasil;
	}

	function update_dosen($nip,$nama_dosen,$jabfung,$konsentrasi,$email,$password,$notelp,$status,$level){
		$hasil=$this->db->query("UPDATE dosen SET nip='$nip',nama_dosen='$nama_dosen',jabfung='$jabfung',konsentrasi='$konsentrasi',email='$email',password='$password',notelp='$notelp',status='$status',level='$level' WHERE email='$email'");
		return $hasil;
	}

	function hapus_dosen($nip){
		$hasil=$this->db->query("DELETE FROM dosen WHERE nip='$nip'");
		return $hasil;
	}
	
	public function pembimbing_list(){
		//$hasil=$this->db->query("SELECT * FROM mahasiswa");
		$hasil = $this->db->query("
			SELECT * FROM proposal
			WHERE pembimbing_1='".$this->session->userdata('nama_dosen')."'
				");
		//return $res;
		return $hasil->result();
	}

	public function pembimbing_2_list(){
		//$hasil=$this->db->query("SELECT * FROM mahasiswa");
		$hasil = $this->db->query("
			SELECT * FROM proposal
			WHERE pembimbing_2='".$this->session->userdata('nama_dosen')."'
				");
		//return $res;
		return $hasil->result();
	}

	public function pendadaran_list(){
		$hasil=$this->db->query("SELECT * FROM pendadaran");
		return $hasil->result();
	}

	public function laporan_akhir_list(){
		$hasil=$this->db->query("SELECT * FROM laporan_akhir");
		return $hasil->result();
	}

	public function getNews(){
		$hasil=$this->db->query("SELECT * FROM news WHERE status='Publish'");
		return $hasil->result();
	}
}