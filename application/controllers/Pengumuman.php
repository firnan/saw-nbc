<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('pengumuman_model');
	}
	
	function index(){
		$this->load->view('account/admin/pengumuman');
	}

	function data_pengumuman(){
		$data=$this->pengumuman_model->pengumuman_list();
		echo json_encode($data);
	}

	function get_pengumuman(){
		$kode_news=$this->input->get('kode_news');
		$data=$this->pengumuman_model->get_pengumuman_by_kode($kode_news);
		echo json_encode($data);
	}

	function simpan_pengumuman(){
		$kode_news=$this->input->post('kode_news');
		$tanggal=$this->input->post('tanggal');
		$judul=$this->input->post('judul');
		$perihal=$this->input->post('perihal');
		$konten=$this->input->post('konten');
		$status=$this->input->post('status');
		$data=$this->pengumuman_model->simpan_pengumuman($kode_news,$tanggal,$judul,$perihal,$konten,$status);
		echo json_encode($data);
	}

	function update_pengumuman(){
		$kode_news=$this->input->post('kode_news');
		$tanggal=$this->input->post('tanggal');
		$judul=$this->input->post('judul');
		$perihal=$this->input->post('perihal');
		$konten=$this->input->post('konten');
		$status=$this->input->post('status');
		$data=$this->pengumuman_model->update_pengumuman($kode_news,$tanggal,$judul,$perihal,$konten,$status);
		echo json_encode($data);
	}

	function hapus_pengumuman(){
		$kode_news=$this->input->post('kode');
		$data=$this->pengumuman_model->hapus_pengumuman($kode_news);
		echo json_encode($data);
	}

}