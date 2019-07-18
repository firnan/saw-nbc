<?php
class Pendadaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('pendadaran_model');
	}
	
	function index(){
		$this->load->view('account/admin/data_pendadaran');
	}

	function data_pendadaran(){
		$data=$this->pendadaran_model->pendadaran_list();
		echo json_encode($data);
	}

	function get_pendadaran(){
		$nim=$this->input->get('id_pendadaran');
		$data=$this->pendadaran_model->get_pendadaran_by_nim($nim);
		echo json_encode($data);
	}

	function simpan_pendadaran(){
		$nim=$this->input->post('nim');
		$nama_mhs=$this->input->post('nama_mhs');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$penguji_1=$this->input->post('penguji_1');
		$penguji_2=$this->input->post('penguji_2');
		$judul_skripsi=$this->input->post('judul_skripsi');
		$tgl=$this->input->post('tgl');
		$ruangan=$this->input->post('ruangan');
		$jam=$this->input->post('jam');
		$nilai_pendadaran=$this->input->post('nilai_pendadaran');
		$data=$this->pendadaran_model->simpan_pendadaran($nim,$nama_mhs,$pembimbing_1,$pembimbing_2,$penguji_1,$penguji_2,$judul_skripsi,$tgl,$ruangan,$jam,$nilai_pendadaran);
		echo json_encode($data);
	}

	function update_pendadaran(){
		$nim=$this->input->post('nim');
		$nama_mhs=$this->input->post('nama_mhs');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$penguji_1=$this->input->post('penguji_1');
		$penguji_2=$this->input->post('penguji_2');
		$judul_skripsi=$this->input->post('judul_skripsi');
		$tgl=$this->input->post('tgl');
		$ruangan=$this->input->post('ruangan');
		$jam=$this->input->post('jam');
		$nilai_pendadaran=$this->input->post('nilai_pendadaran');
		$data=$this->pendadaran_model->update_pendadaran($nim,$nama_mhs,$pembimbing_1,$pembimbing_2,$penguji_1,$penguji_2,$judul_skripsi,$tgl,$ruangan,$jam,$nilai_pendadaran);
		echo json_encode($data);
	}

	function hapus_pendadaran(){
		$nim=$this->input->post('kode');
		$data=$this->pendadaran_model->hapus_pendadaran($nim);
		echo json_encode($data);
	}

}