<?php
class pendadaran_model extends CI_Model{

	function pendadaran_list(){
		$hasil=$this->db->query("SELECT * FROM pendadaran");
		return $hasil->result();
	}

	function simpan_pendadaran($nim,$nama_mhs,$pembimbing_1,$pembimbing_2,$penguji_1,$penguji_2,$judul_skripsi,$tgl,$ruangan,$jam,$nilai_pendadaran){
		$hasil=$this->db->query("INSERT INTO pendadaran (nim,nama_mhs,pembimbing_1,pembimbing_2,penguji_1,penguji_2,judul_skripsi,tgl,ruangan,jam,nilai_pendadaran)VALUES('$nim','$nama_mhs','$pembimbing_1','$pembimbing_2','$penguji_1','$penguji_2','$judul_skripsi','$tgl','$ruangan','$jam','$nilai_pendadaran')");
		return $hasil;
	}

	function get_pendadaran_by_nim($nim){
		$hsl=$this->db->query("SELECT * FROM pendadaran WHERE nim='$nim'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nim' => $data->nim,
					'nama_mhs' => $data->nama_mhs,
					'pembimbing_1' => $data->pembimbing_1,
					'pembimbing_2' => $data->pembimbing_2,
					'penguji_1' => $data->penguji_1,
					'penguji_2' => $data->penguji_2,
					'judul_skripsi' => $data->judul_skripsi,
					'tgl' => $data->tgl,
					'ruangan' => $data->ruangan,
					'jam' => $data->jam,
					'nilai_pendadaran' => $data->nilai_pendadaran,
					);
			}
		}
		return $hasil;
	}

	function update_pendadaran($nim,$nama_mhs,$pembimbing_1,$pembimbing_2,$penguji_1,$penguji_2,$judul_skripsi,$tgl,$ruangan,$jam,$nilai_pendadaran){
		$hasil=$this->db->query("UPDATE pendadaran SET nim='$nim',nama_mhs='$nama_mhs',pembimbing_1='$pembimbing_1',pembimbing_2='$pembimbing_2',penguji_1='$penguji_1',penguji_2='$penguji_2',judul_skripsi='$judul_skripsi',tgl='$tgl',ruangan='$ruangan',jam='$jam',nilai_pendadaran='$nilai_pendadaran' WHERE nim='$nim'");
		return $hasil;
	}

	function hapus_pendadaran($nim){
		$hasil=$this->db->query("DELETE FROM pendadaran WHERE nim='$nim'");
		return $hasil;
	}
	
}