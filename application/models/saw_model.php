<?php
class saw_model extends CI_Model{

	// Konsentrasi
	function konsentrasi_list(){
		$hasil=$this->db->query("SELECT * FROM k_konsentrasi");
		return $hasil->result();
	}

	function simpan_konsentrasi($nama_dosen,$advert,$broadcast,$jurnal,$pr,$other){
		$hasil=$this->db->query("INSERT INTO k_konsentrasi (nama_dosen,advert,broadcast,jurnal,pr,other)VALUES('$nama_dosen','$advert','$broadcast','$jurnal','$pr','$other')");
		return $hasil;
	}

	function get_konsentrasi_by_nama_dosen($nama_dosen){
		$hsl=$this->db->query("SELECT * FROM k_konsentrasi WHERE nama_dosen='$nama_dosen'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nama_dosen' => $data->nama_dosen,
					'advert' => $data->advert,
					'broadcast' => $data->broadcast,
					'jurnal' => $data->jurnal,
					'pr' => $data->pr,
					'other' => $data->other,
					);
			}
		}
		return $hasil;
	}

	function update_konsentrasi($nama_dosen,$advert,$broadcast,$jurnal,$pr,$other){
		$hasil=$this->db->query("UPDATE k_konsentrasi SET nama_dosen='$nama_dosen',advert='$advert',broadcast='$broadcast',jurnal='$jurnal',pr='$pr',other='$other' WHERE nama_dosen='$nama_dosen'");
		return $hasil;
	}

	function hapus_konsentrasi($nama_dosen){
		$hasil=$this->db->query("DELETE FROM k_konsentrasi WHERE nama_dosen='$nama_dosen'");
		return $hasil;
	}

	///////////////// Kriteria
	public function kriteria_list(){
		$hasil=$this->db->query("SELECT * FROM k_kriteria");
		return $hasil->result();
	}

	public function simpan_kriteria($nip,$nama_dosen,$jabfung_1,$jabfung_2,$kuota_1,$kuota_2){
		$hasil=$this->db->query("INSERT INTO k_kriteria (nip,nama_dosen,jabfung_1,jabfung_2,kuota_1,kuota_2)VALUES('$nip','$nama_dosen','$jabfung_1','$jabfung_2','$kuota_1','$kuota_2')");
		return $hasil;
	}

	public function get_kriteria_by_nip($nip){
		$hsl=$this->db->query("SELECT * FROM k_kriteria WHERE nip='$nip'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip' => $data->nip,
					'nama_dosen' => $data->nama_dosen,
					'jabfung_1' => $data->jabfung_1,
					'jabfung_2' => $data->jabfung_2,
					'kuota_1' => $data->kuota_1,
					'kuota_2' => $data->kuota_2,
					);
			}
		}
		return $hasil;
	}

	public function update_kriteria($nip,$nama_dosen,$jabfung_1,$jabfung_2,$kuota_1,$kuota_2){
		$hasil=$this->db->query("UPDATE k_kriteria SET nip='$nip',nama_dosen='$nama_dosen',jabfung_1='$jabfung_1',jabfung_2='$jabfung_2',kuota_1='$kuota_1',kuota_2='$kuota_2' WHERE nip='$nip'");
		return $hasil;
	}

	public function hapus_kriteria($nip){
		$hasil=$this->db->query("DELETE FROM k_kriteria WHERE nip='$nip'");
		return $hasil;
	}
	
	// Kompetensi
	function kompetensi_list(){
		$hasil=$this->db->query("SELECT * FROM k_kompetensi");
		return $hasil->result();
	}

	function simpan_kompetensi($nama_dosen,$csr,$strategi_pr,$pemasaran,$organisasi,$semiotika,$branding,$politik,$media,$budaya,$radio_tv_film){
		$hasil=$this->db->query("INSERT INTO k_kompetensi (nama_dosen,csr,strategi_pr,pemasaran,organisasi,semiotika,branding,politik,media,budaya,radio_tv_film)VALUES('$nama_dosen','$csr','$strategi_pr','$pemasaran','$organisasi','$semiotika','$branding','$politik','$media','$budaya','$radio_tv_film')");
		return $hasil;
	}

	function get_kompetensi_by_nama($nama_dosen){
		$hsl=$this->db->query("SELECT * FROM k_kompetensi WHERE nama_dosen='$nama_dosen'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nama_dosen' => $data->nama_dosen,
					'csr' => $data->csr,
					'strategi_pr' => $data->strategi_pr,
					'pemasaran' => $data->pemasaran,
					'organisasi' => $data->organisasi,
					'semiotika' => $data->semiotika,
					'branding' => $data->branding,
					'politik' => $data->politik,
					'media' => $data->media,
					'budaya' => $data->budaya,
					'radio_tv_film' => $data->radio_tv_film,
					);
			}
		}
		return $hasil;
	}

	function update_kompetensi($nama_dosen,$csr,$strategi_pr,$pemasaran,$organisasi,$semiotika,$branding,$politik,$media,$budaya,$radio_tv_film){
		$hasil=$this->db->query("UPDATE k_kompetensi SET nama_dosen='$nama_dosen',
														 csr='$csr',
														 strategi_pr='$strategi_pr',
														 pemasaran='$pemasaran',
														 organisasi='$organisasi',
														 semiotika='$semiotika',
														 branding='$branding',
														 politik='$politik',
														 media='$media',
														 budaya='$budaya',
														 radio_tv_film='$radio_tv_film' 
														 WHERE nama_dosen='$nama_dosen'");
		return $hasil;
	}

	function hapus_kompetensi($nama_dosen){
		$hasil=$this->db->query("DELETE FROM k_kompetensi WHERE nama_dosen='$nama_dosen'");
		return $hasil;
	}
}