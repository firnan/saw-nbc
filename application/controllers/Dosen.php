<?php
class Dosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dosen_model');
	}
	// Dosen
	function index(){
		$this->load->view('account/admin/data_dosen');
	}

	function data_dosen(){
		$data=$this->dosen_model->dosen_list();
		echo json_encode($data);
	}

	function get_dosen(){
		$nip=$this->input->get('id_dosen');
		$data=$this->dosen_model->get_dosen_by_nip($nip);
		echo json_encode($data);
	}

	function simpan_dosen(){
		$nip=$this->input->post('nip');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung=$this->input->post('jabfung');
		$konsentrasi=$this->input->post('konsentrasi');
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$notelp=$this->input->post('notelp');
		$status=$this->input->post('status');
		$level=$this->input->post('level');
		$data=$this->dosen_model->simpan_dosen($nip,$nama_dosen,$jabfung,$konsentrasi,$email,$password,$notelp,$status,$level);
		echo json_encode($data);
	}

	function update_dosen(){
		$nip=$this->input->post('nip');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung=$this->input->post('jabfung');
		$konsentrasi=$this->input->post('konsentrasi');
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$notelp=$this->input->post('notelp');
		$status=$this->input->post('status');
		$level=$this->input->post('level');
		$data=$this->dosen_model->update_dosen($nip,$nama_dosen,$jabfung,$konsentrasi,$email,$password,$notelp,$status,$level);
		echo json_encode($data);
	}

	function hapus_dosen(){
		$nip=$this->input->post('kode');
		$data=$this->dosen_model->hapus_dosen($nip);
		echo json_encode($data);
	}

	public function dashboard()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}

		$data['data'] = $this->dosen_model->getNews();
		$this->load->view('account/dosen/index', $data);
	}

	public function dosen_list()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}

		$data['data'] = $this->dosen_model->dosen_list();
		$this->load->view('account/dosen/data_dosen', $data);
	}

	public function pembimbing_list()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}

		$this->load->model('dosen_model');
		$data = array(
			'dosen' => $this->dosen_model->pembimbing_list(),
			'judul' => 'Data Pembimbing'
		);
		$this->load->view('account/dosen/data_pembimbing', $data);
	}

	public function pembimbing_2_list()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}
		$this->load->model('dosen_model');
		$data = array(
			'dosen' => $this->dosen_model->pembimbing_2_list(),
			'judul' => 'Data Pembimbing'
		);
		$this->load->view('account/dosen/data_pembimbing_2', $data);
	}

	public function pendadaran_list()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}
		$data['data'] = $this->dosen_model->pendadaran_list();
		$this->load->view('account/dosen/pendadaran_dosen', $data);
	}

	public function laporan_akhir_list()
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}
		$data['data'] = $this->dosen_model->laporan_akhir_list();
		$this->load->view('account/dosen/lap_akhir_dosen', $data);
	}

}