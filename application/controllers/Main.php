<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('data_model');
        $this->load->model('olahdata_model');
        $this->load->model('mahasiswa_model');
		$this->load->library('form_validation');
		$this->load->library(array('form_validation', 'session'));
    }

    public function index() {
        $this->load->view('auth/login');
        //$this->load->view('index');
    }

    public function dashboard()
    {
    	//$this->load->view('account/admin/dashboard');
    	$data['data'] = $this->mahasiswa_model->getNews();
		$this->load->view('account/admin/dashboard', $data);
    	//$data = $this->olahdata_model->get_data()->result();
      	//$x['data'] = json_encode($data);
      	//$this->load->view('account/admin/dashboard',$x);
    	//$this->load->view('dashboard/landing-page');
    	//$data['data'] = $this->olahdata_model->get_data();
		//$this->load->view('account/admin/dashboard', $data);
    }

    function getdata() 
        { 
        $data = $this->olahdata_model->get_data(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->konsentrasi", 
                    "f" => null 
                ) , 
               /* array( 
                    "v" => (int)$cd->quantity, 
                    "f" => null 
                ) */
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    

    public function tabledosen()
    {
    	$this->load->view('account/admin/table_dosen');
    }

    public function tablemahasiswa()
    {
    	$this->load->view('account/admin/table_mhs');
    }

    public function userlogin()
    {
    	$this->load->model('data_model');
		$data['data'] = $this->data_model->getData();
		$this->load->view('account/admin/user_login', $data);

    }

    public function delete_user($nim)
	{
		if (!$this->session->userdata('masuk') == true) {
        	redirect('auth');
    	}
		$res = $this->db->delete("mahasiswa",array('nim' => $nim));
		if($res){
			$this->session->set_flashdata('success', '<b>Sukses!</b> Hapus Data Mahasiswa');
			redirect('main/userlogin');			
		}else{
			$this->session->set_flashdata('errors', '<b>Gagal!</b> Hapus Data Mahasiswa');
			redirect('main/userlogin');	
		}
	}
    
    public function register()
    {
    	$this->load->view('login/register');
    }

    public function form()
    {
    	$this->load->view('account/mahasiswa/index');
    	//$this->session->set_flashdata('message', 'yes');
    }

    public function sukses_upload_proposal()
    {
    	$this->load->view('account/mahasiswa/sukses_upload');
    }

    public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('judul', 'Judul Proposal', 'required');
		//$this->form_validation->set_rules('konsentrasi', 'Konsentrasi', 'required');
		$this->form_validation->set_rules('pembimbing_1', 'Pembimbing 1', 'required');
		$this->form_validation->set_rules('pembimbing_2', 'Pembimbing 2', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('account/mahasiswa/index');
		}else{
			
			//get the form values
			$data['nim'] = $this->input->post('nim');
			$data['judul'] = $this->input->post('judul');
			//$data['konsentrasi'] = $this->input->post('konsentrasi');
			$data['pembimbing_1'] = $this->input->post('pembimbing_1');
			$data['pembimbing_2'] = $this->input->post('pembimbing_2');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../upload/';
			$config['allowed_types']        = 'pdf|doc|docx';
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('proposal')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('account/mahasiswa/index', $error);
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
				redirect('main/sukses_upload_proposal');
				//$this->session->set_flashdata('msg', 'yes');

				//$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                //redirect('main/form');
				//redirect('main/form', 're');
			}
			//$this->load->view('footer');
		}
	}

	public function pendadaran_mhs()
	{
		$this->load->view('account/mahasiswa/pendadaran');
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
			$this->load->view('account/mahasiswa/index');
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
			$config['max_size']             = 10000;

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
				redirect('main/sukses_upload_proposal');
				//$this->session->set_flashdata('msg', 'yes');

				//$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                //redirect('main/form');
				//redirect('main/form', 're');
			}
			//$this->load->view('footer');
		}
	}

	public function history()
	{
		$this->load->view('account/mahasiswa/history');
	}

	public function edit_profil_mhs()
	{
		$this->load->model('crud_model');
		$data['data'] = $this->crud_model->Menampilkan();
		//$users_id = $this->input->post('users_id');
		$this->load->view('account/mahasiswa/edit_profil', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['query'] = $this->crud_model->edit($id);
		$this->load->view('account/mahasiswa/edit_profil', $data);
	}
	
	public function dosen()
	{
		$this->load->view('account/dosen/index');
	}

	public function data_dosen()
	{
		$this->load->view('account/dosen/data_dosen');
	}

	public function pendadaran_dosen()
	{
		$this->load->view('account/dosen/pendadaran_dosen');
	}

	public function lap_akhir_dosen()
	{
		$this->load->view('account/dosen/lap_akhir_dosen');
	}

	public function olah_data_pembimbing()
	{
		$this->load->model('data_model');
		$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/olahdata_pembimbing', $data);
	}
	
	public function coba()
	{
		$this->load->view('account/admin/data_dosen');
	}

	public function olah_data()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/uji_proposal');
	}

	public function uji_proposal()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/aksi_main');
	}

	public function uji_saw()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/uji_saw');
	}

	public function hasil()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/hasil');
	}

	function chart(){
		$this->load->model('olahdata_model');
        $x['data']=$this->olahdata_model->get_data_stok();
        $this->load->view('account/admin/dashboard',$x);
    }

}



/* End of file Main.php */
/* Location: ./application/controllers/Main.php */