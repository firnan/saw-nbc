<?php
class Laporan_Akhir extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('lapakhir_model');
	}
	
	function index(){
		$this->load->view('account/admin/data_laporan_akhir');
	}

	function data_lapakhir(){
		$data=$this->lapakhir_model->lapakhir_list();
		echo json_encode($data);
	}

	function get_lapakhir(){
		$nim=$this->input->get('id_lap_akhir');
		$data=$this->lapakhir_model->get_lapakhir_by_nim($nim);
		echo json_encode($data);
	}

	function simpan_lapakhir(){
		$nim=$this->input->post('nim');
		$namalengkap=$this->input->post('namalengkap');
		$judul=$this->input->post('judul');
		$pembimbing1=$this->input->post('pembimbing1');
		$pembimbing2=$this->input->post('pembimbing2');
		$lap_akhir=$this->input->post('lap_akhir');
		$nilai=$this->input->post('nilai');
		$upload_at=$this->input->post('upload_at');
		$data=$this->lapakhir_model->simpan_lapakhir($nim,$namalengkap,$judul,$pembimbing1,$pembimbing2,$lap_akhir,$nilai,$upload_at);
		echo json_encode($data);
	}

	function update_lapakhir(){
		$nim=$this->input->post('nim');
		$namalengkap=$this->input->post('namalengkap');
		$judul=$this->input->post('judul');
		$pembimbing1=$this->input->post('pembimbing1');
		$pembimbing2=$this->input->post('pembimbing2');
		$lap_akhir=$this->input->post('lap_akhir');
		$nilai=$this->input->post('nilai');
		$upload_at=$this->input->post('upload_at');
		$data=$this->lapakhir_model->update_lapakhir($nim,$namalengkap,$judul,$pembimbing1,$pembimbing2,$lap_akhir,$nilai,$upload_at);
		echo json_encode($data);
	}

	function hapus_lapakhir(){
		$nim=$this->input->post('kode');
		$data=$this->lapakhir_model->hapus_lapakhir($nim);
		echo json_encode($data);
	}

}