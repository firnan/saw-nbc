<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('data_model');
        $this->load->model('mahasiswa_model');
		$this->load->library('form_validation');
		$this->load->library(array('form_validation', 'session'));
		$this->load->library('session');
    }

	public function index()
	{
		$data['data'] = $this->mahasiswa_model->getNews();
		$this->load->view('account/mahasiswa/index', $data);
		//$this->load->view('account/mahasiswa/history');
    	//$this->session->set_flashdata('message', 'yes');
	} 
	
	public function pengajuan_proposal()
	{
		$this->load->view('account/mahasiswa/pengajuan_proposal');
		//$this->load->view('account/mahasiswa/history');
    	//$this->session->set_flashdata('message', 'yes');
	}

	public function profile()
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
    	$this->load->model('mahasiswa_model');
		$data = array(
			'mahasiswa' => $this->mahasiswa_model->getProfile()->row(),
			'judul' => 'Profile',
			'sub_judul'=> 'Profile' 
		);
		//$this->load->view('template/top', $data, FALSE);
		$this->load->view('account/mahasiswa/edit_profil', $data, FALSE);
		//$this->load->view('template/bottom', $data, FALSE);
	}

	public function data_proposal()
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
    	$this->load->model('mahasiswa_model');
		$data = array(
			'proposal' => $this->mahasiswa_model->getProposal()->result(),
			'judul' => 'History Proposal'
		);
		//$this->load->view('template/top', $data, FALSE);
		$this->load->view('account/mahasiswa/data_proposal', $data, FALSE);
		//$this->load->view('template/bottom', $data, FALSE);
	}

	public function delete_proposal($nim)
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
		$res = $this->db->delete("proposal",array('id_mhs' => $nim));
		if($res){
			$this->session->set_flashdata('success', '<b>Sukses!</b> Hapus Data Mahasiswa');
			redirect('mahasiswa/data_proposal');			
		}else{
			$this->session->set_flashdata('errors', '<b>Gagal!</b> Hapus Data Mahasiswa');
			redirect('mahasiswa/data_proposal');
		}
	}

	public function data_laporan_akhir()
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
    	$this->load->model('mahasiswa_model');
		$data = array(
			'laporanakhir' => $this->mahasiswa_model->getLapAkhir()->result(),
			'judul' => 'History Laporan Akhir'
		);
		//$this->load->view('template/top', $data, FALSE);
		$this->load->view('account/mahasiswa/data_laporan_akhir', $data, FALSE);
		//$this->load->view('template/bottom', $data, FALSE);
	}

	public function delete_laporan_akhir($nim)
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
		$res = $this->db->delete("laporan_akhir",array('id_lap_akhir' => $nim));
		if($res){
			$this->session->set_flashdata('success', '<b>Sukses!</b> Hapus Data Mahasiswa');
			redirect('mahasiswa/data_laporan_akhir');			
		}else{
			$this->session->set_flashdata('errors', '<b>Gagal!</b> Hapus Data Mahasiswa');
			redirect('mahasiswa/data_laporan_akhir');
		}
	}

	public function pendadaran()
	{
		if (!$this->session->userdata('masuk_mhs') == true) {
        	redirect('auth');
    	}
    	$this->load->model('mahasiswa_model');
		$data = array(
			'pendadaran' => $this->mahasiswa_model->getPendadaran()->result(),
			'judul' => 'Pendadaran'
		);
		//$this->load->view('template/top', $data, FALSE);
		$this->load->view('account/mahasiswa/pendadaran', $data, FALSE);
		//$this->load->view('template/bottom', $data, FALSE);
	}

	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('judul', 'Judul Proposal', 'required');
		//$this->form_validation->set_rules('konsentrasi', 'Konsentrasi', 'required');
		$this->form_validation->set_rules('pembimbing_1', 'Pembimbing 1', 'required');
		$this->form_validation->set_rules('pembimbing_2', 'Pembimbing 2', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('account/mahasiswa/index');
		}else{
			
			//get the form values
			$data['nim'] = $this->input->post('nim');
			$data['judul'] = $this->input->post('judul');
			//$data['konsentrasi'] = $this->input->post('konsentrasi');
			$data['pembimbing_1'] = $this->input->post('pembimbing_1');
			$data['pembimbing_2'] = $this->input->post('pembimbing_2');
			$data['status'] = $this->input->post('status');
			$data['keterangan'] = $this->input->post('keterangan');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../upload/proposal';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('proposal')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('account/mahasiswa/pengajuan_proposal', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['proposal'] = $upload_data['file_name'];

				//store pic data to the db
				$this->data_model->store_proposal_data($data);

				
				//echo "<script>alert('yes');history.go(-1);</script>";
				//echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
				//redirect('main/sukses_upload_proposal');
				//$this->session->set_flashdata('message', 'anda berhasil menginput data');
				$this->session->set_flashdata('success', 'Proposal Berhasil Diajukan');
				redirect('mahasiswa/pengajuan_proposal');
				//$this->session->set_flashdata('msg', 'yes');

				//$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                //redirect('main/form');
				//redirect('main/form', 're');
			}
			//$this->load->view('footer');
		}
	}

	public function form_lap_akhir()
    {
    	$this->load->view('account/mahasiswa/laporan_akhir');
    }

    public function file_data_lap_akhir(){
		//validate the form data 

		$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('judul', 'Judul Proposal', 'required');
		$this->form_validation->set_rules('pembimbing1', 'Pembimbing 1', 'required');
		$this->form_validation->set_rules('pembimbing2', 'Pembimbing 2', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('account/mahasiswa/laporan_akhir');
		}else{
			
			//get the form values
			$data['namalengkap'] = $this->input->post('namalengkap');
			$data['nim'] = $this->input->post('nim');
			$data['judul'] = $this->input->post('judul');
			$data['pembimbing1'] = $this->input->post('pembimbing1');
			$data['pembimbing2'] = $this->input->post('pembimbing2');
			$data['nilai'] = $this->input->post('nilai');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../upload/laporan_akhir/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 20480;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('lap_akhir')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('account/mahasiswa/laporan_akhir', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['lap_akhir'] = $upload_data['file_name'];

				//store pic data to the db
				$this->data_model->store_laporan_akhir_data($data);

				
				//echo "<script>alert('yes');history.go(-1);</script>";
				$this->session->set_flashdata('success', 'Laporan Akhir Berhasil Disimpan');
				redirect('mahasiswa/form_lap_akhir');
				//$this->session->set_flashdata('msg', 'yes');

				//$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                //redirect('main/form');
				//redirect('main/form', 're');
			}
			//$this->load->view('footer');
		}
	}

	public function daftar_pembimbing()
	{
		$data['data'] = $this->mahasiswa_model->pembimbing_list();
		$this->load->view('account/mahasiswa/daftar_pembimbing', $data);
	}

	function download($filename = NULL) {
    // load download helder
    $this->load->helper('download');
    // read file contents
    $data = file_get_contents(base_url('/upload/proposal/'.$filename));
    force_download($filename, $data);
	}

	function download_laporan_akhir($filename = NULL) {
    // load download helder
    $this->load->helper('download');
    // read file contents
    $data = file_get_contents(base_url('/upload/laporan_akhir/'.$filename));
    force_download($filename, $data);
	}

	public function profil()
    {
        $data["profil"] = $this->mahasiswa_model->getAll();
        $this->load->view("account/mahasiswa/edit_profil", $data);
    }

     public function edit1($users_id = null)
    {
        if (!isset($users_id)) redirect('mahasiswa/profil');
       
        $product = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($users_id);
        if (!$data["product"]) show_404();
        
        $this->load->view("account/mahasiswa/edit_form", $data);
    }

    function update(){
	$users_id = $this->input->post('users_id');
	$nim = $this->input->post('nim');
	$namalengkap = $this->input->post('namalengkap');
	$email = $this->input->post('alamat');
	$password = $this->input->post('pekerjaan');
 
	$data = array(
		'nim' => $nim,
		'namalengkap' => $namalengkap,
		'email' => $email,
		'password' => $password
	);
 
	$where = array(
		'users_id' => $users_id
	);
 
	$this->mahasiswa_model->update_data($where,$data,'mahasiswa');
	redirect('account/mahasiswa/edit_profil');
	}

	public function getProfil()
		{
		$data['profil'] = $this->mahasiswa_model->get_profil();
		$data['title'] = 'Profile';
		 
		//$this->load->view('templates/header', $data);
		$this->load->view('account/mahasiswa/edit_profil', $data);
		//$this->load->view('templates/footer');
		}

	public function edit()
		{
		$users_id = $this->uri->segment(3);
		 
		if (empty($users_id))
		{
		show_404();
		}
		 
		$this->load->helper('form');
		$this->load->library('form_validation');
		 
		$data['title'] = 'Edit Profil';
		$data['profil'] = $this->mahasiswa_model->get_profil_by_id($users_id);
		 
		$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		 
		if ($this->form_validation->run() === FALSE)
		{
		//$this->load->view('templates/header', $data);
		$this->load->view('account/mahasiswa/edit_profil', $data);
		//$this->load->view('templates/footer');
		 
		}
		else
		{
		$this->mahasiswa_model->set_faqs($users_id);
		redirect( base_url() . 'account/mahasiswa/edit_profil');
		}
		}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */