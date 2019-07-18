<?php
class pengumuman_model extends CI_Model{

	function pengumuman_list(){
		$hasil=$this->db->query("SELECT * FROM news");
		return $hasil->result();
	}

	function simpan_pengumuman($kode_news,$tanggal,$judul,$perihal,$konten,$status){
		$now = date('Y-m-d H:i:s');
		$hasil=$this->db->query("INSERT INTO news (kode_news,tanggal,judul,perihal,konten,status) VALUES ('$kode_news','$now','$judul','$perihal','$konten','$status')");
		return $hasil;
	}

	function get_pengumuman_by_kode($kode_news){
		$hsl=$this->db->query("SELECT * FROM news WHERE kode_news='$kode_news'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kode_news' => $data->kode_news,
					'tanggal' => $data->tanggal,
					'judul' => $data->judul,
					'perihal' => $data->perihal,
					'konten' => $data->konten,
					'status' => $data->status,
					);
			}
		}
		return $hasil;
	}

	function update_pengumuman($kode_news,$tanggal,$judul,$perihal,$konten,$status){
		$now = date('Y-m-d H:i:s');
		$hasil=$this->db->query("UPDATE news SET kode_news='$kode_news',tanggal='$now',judul='$judul',perihal='$perihal',konten='$konten',status='$status' WHERE kode_news='$kode_news'");
		return $hasil;
	}

	function hapus_pengumuman($kode_news){
		$hasil=$this->db->query("DELETE FROM news WHERE kode_news='$kode_news'");
		return $hasil;
	}
	
}