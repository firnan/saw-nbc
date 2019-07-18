<?php
class news_model extends CI_Model{

	function news_list(){
		$hasil=$this->db->query("SELECT * FROM news");
		return $hasil->result();
	}

	function simpan_news($id_news,$tanggal,$judul,$perihal,$konten,$status){
		$hasil=$this->db->query("INSERT INTO news (tanggal,judul,perihal,konten,status)VALUES('$tanggal','$judul','$perihal','$konten','$status')");
		return $hasil;
	}

	function get_news_by_id_news($id_news){
		$hsl=$this->db->query("SELECT * FROM news WHERE id_news='$id_news'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
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

	function update_news($id_news,$tanggal,$judul,$perihal,$konten,$status){
		$hasil=$this->db->query("UPDATE news SET tanggal='$tanggal',judul='$judul',perihal='$perihal',konten='$konten',status='$status' WHERE perihal='$perihal'");
		return $hasil;
	}

	function hapus_news($id_news){
		$hasil=$this->db->query("DELETE FROM news WHERE id_news='$id_news'");
		return $hasil;
	}
	
}