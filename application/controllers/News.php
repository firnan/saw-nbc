<?php
class News extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}
	
	function index(){
		$this->load->view('account/admin/news');
	}

	function data_news(){
		$data=$this->news_model->news_list();
		echo json_encode($data);
	}

	function get_news(){
		$id_news=$this->input->get('id_news');
		$data=$this->news_model->get_news_by_id_news($id_news);
		echo json_encode($data);
	}

	function simpan_news(){
		$id_news=$this->input->post('id_news');
		$tanggal=$this->input->post('tanggal');
		$judul=$this->input->post('judul');
		$perihal=$this->input->post('perihal');
		$konten=$this->input->post('konten');
		$status=$this->input->post('status');
		$data=$this->news_model->simpan_news($id_news,$tanggal,$judul,$perihal,$konten,$status);
		echo json_encode($data);
	}

	function update_news(){
		$id_news=$this->input->post('id_news');
		$tanggal=$this->input->post('tanggal');
		$judul=$this->input->post('judul');
		$perihal=$this->input->post('perihal');
		$konten=$this->input->post('konten');
		$status=$this->input->post('status');
		$data=$this->news_model->update_news($id_news,$tanggal,$judul,$perihal,$konten,$status);
		echo json_encode($data);
	}

	function hapus_news(){
		$id_news=$this->input->post('kode');
		$data=$this->news_model->hapus_news($id_news);
		echo json_encode($data);
	}

}