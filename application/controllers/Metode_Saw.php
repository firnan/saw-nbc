<?php
class Metode_Saw extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('saw_model');
	}
	// Konsentrasi
	function konsentrasi(){
		$this->load->view('account/admin/konsentrasi');
	}

	function data_konsentrasi(){
		$data=$this->saw_model->konsentrasi_list();
		echo json_encode($data);
	}

	function get_konsentrasi(){
		$nama_dosen=$this->input->get('id_konsen');
		$data=$this->saw_model->get_konsentrasi_by_nama_dosen($nama_dosen);
		echo json_encode($data);
	}

	function simpan_konsentrasi(){
		$nama_dosen=$this->input->post('nama_dosen');
		$advert=$this->input->post('advert');
		$broadcast=$this->input->post('broadcast');
		$jurnal=$this->input->post('jurnal');
		$pr=$this->input->post('pr');
		$other=$this->input->post('other');
		$data=$this->saw_model->simpan_konsentrasi($nama_dosen,$advert,$broadcast,$jurnal,$pr,$other);
		echo json_encode($data);
	}

	function update_konsentrasi(){
		$nama_dosen=$this->input->post('nama_dosen');
		$advert=$this->input->post('advert');
		$broadcast=$this->input->post('broadcast');
		$jurnal=$this->input->post('jurnal');
		$pr=$this->input->post('pr');
		$other=$this->input->post('other');
		$data=$this->saw_model->update_konsentrasi($nama_dosen,$advert,$broadcast,$jurnal,$pr,$other);
		echo json_encode($data);
	}

	function hapus_konsentrasi(){
		$nama_dosen=$this->input->post('kode');
		$data=$this->saw_model->hapus_konsentrasi($nama_dosen);
		echo json_encode($data);
	}

	/////////////////////// Kriteria Lain
	function kriteria_lain(){
		$this->load->view('account/admin/kriteria_lain');
	}

	function data_kriteria(){
		$data=$this->saw_model->kriteria_list();
		echo json_encode($data);
	}

	function get_kriteria(){
		$nip=$this->input->get('id_kriteria');
		$data=$this->saw_model->get_kriteria_by_nip($nip);
		echo json_encode($data);
	}

	function simpan_kriteria(){
		$nip=$this->input->post('nip');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung_1=$this->input->post('jabfung_1');
		$jabfung_2=$this->input->post('jabfung_2');
		$kuota_1=$this->input->post('kuota_1');
		$kuota_2=$this->input->post('kuota_2');
		$data=$this->saw_model->simpan_kriteria($nip,$nama_dosen,$jabfung_1,$jabfung_2,$kuota_1,$kuota_2);
		echo json_encode($data);
	}

	function update_kriteria(){
		$nip=$this->input->post('nip');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung_1=$this->input->post('jabfung_1');
		$jabfung_2=$this->input->post('jabfung_2');
		$kuota_1=$this->input->post('kuota_1');
		$kuota_2=$this->input->post('kuota_2');
		$data=$this->saw_model->update_kriteria($nip,$nama_dosen,$jabfung_1,$jabfung_2,$kuota_1,$kuota_2);
		echo json_encode($data);
	}

	function hapus_kriteria(){
		$nip=$this->input->post('kode1');
		$data=$this->saw_model->hapus_kriteria($nip);
		echo json_encode($data);
	}

	/////////////////////// Kriteria Kompetensi
	function kompetensi(){
		$this->load->view('account/admin/kompetensi');
	}

	function data_kompetensi(){
		$data=$this->saw_model->kompetensi_list();
		echo json_encode($data);
	}

	function get_kompetensi(){
		$nama_dosen=$this->input->get('nama_dosen');
		$data=$this->saw_model->get_kompetensi_by_nama($nama_dosen);
		echo json_encode($data);
	}

	function simpan_kompetensi(){
		$nama_dosen=$this->input->post('nama_dosen');
		$csr=$this->input->post('csr');
		$strategi_pr=$this->input->post('strategi_pr');
		$pemasaran=$this->input->post('pemasaran');
		$organisasi=$this->input->post('organisasi');
		$semiotika=$this->input->post('semiotika');
		$branding=$this->input->post('branding');
		$politik=$this->input->post('politik');
		$media=$this->input->post('media');
		$budaya=$this->input->post('budaya');
		$radio_tv_film=$this->input->post('radio_tv_film');
		$data=$this->saw_model->simpan_kompetensi($nama_dosen,$csr,$strategi_pr,$pemasaran,$organisasi,$semiotika,$branding,$politik,$media,$budaya,$radio_tv_film);
		echo json_encode($data);
	}

	function update_kompetensi(){
		$nama_dosen=$this->input->post('nama_dosen');
		$csr=$this->input->post('csr');
		$strategi_pr=$this->input->post('strategi_pr');
		$pemasaran=$this->input->post('pemasaran');
		$organisasi=$this->input->post('organisasi');
		$semiotika=$this->input->post('semiotika');
		$branding=$this->input->post('branding');
		$politik=$this->input->post('politik');
		$media=$this->input->post('media');
		$budaya=$this->input->post('budaya');
		$radio_tv_film=$this->input->post('radio_tv_film');
		$data=$this->saw_model->update_kompetensi($nama_dosen,$csr,$strategi_pr,$pemasaran,$organisasi,$semiotika,$branding,$politik,$media,$budaya,$radio_tv_film);
		echo json_encode($data);
	}

	function hapus_kompetensi(){
		$nama_dosen=$this->input->post('kode2');
		$data=$this->saw_model->hapus_kompetensi($nama_dosen);
		echo json_encode($data);
	}

}