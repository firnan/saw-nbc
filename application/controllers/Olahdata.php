<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahdata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));
		$this->load->model('mahasiswa_model');				
	}

	public function details($id_mhs)
	{
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		$this->load->view('account/admin/details', $data);
		//$this->load->view('account/admin/index_nbc', $data);
		
	}

	public function olah_proposal($id_mhs)
	{
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		$this->load->view('account/admin/olah_proposal', $data);
		//$this->load->view('account/admin/index_nbc', $data);
		
	}

	public function olah_pembimbing($id_mhs)
	{
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		$this->load->view('account/admin/olah_pembimbing', $data);
		//$this->load->view('account/admin/index_nbc', $data);
		
	}

	public function update()
	{
		$this->load->model('olahdata_model');
		$id['id_mhs'] = $this->input->post("id_mhs");
		$data = array(

			'nim' 					=> $this->input->post("nim"),
			'judul' 				=> $this->input->post("judul"),
			'konsentrasi' 			=> $this->input->post("konsentrasi"),
			'pembimbing_1'			=> $this->input->post("pembimbing_1"),
			'pembimbing_2'			=> $this->input->post("pembimbing_2"),
			
		);

		$this->olahdata_model->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('olahdata/olah_data_pembimbing');
		//$this->load->view('account/admin/olahdata_pembimbing');
	}

	public function hasil_proposal()
	{
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data2_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		//$this->load->view('account/admin/details_proposal');
		$this->load->view('account/admin/details_proposal', $data);
	}

	public function uji_proposal()
	{
		$this->load->model('olahdata_model');
		$id['proposal'] = $this->input->post("proposal");
		$data = array(

			//'nim' 					=> $this->input->post("nim"),
			//'judul' 				=> $this->input->post("judul"),
			'konsentrasi' 			=> $this->input->post("konsentrasi"),
			//'pembimbing_1'			=> $this->input->post("pembimbing_1"),
			//'pembimbing_2'			=> $this->input->post("pembimbing_2"),
			
		);

		$this->olahdata_model->update_proposal($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('olahdata/olah_data_pembimbing');
		//$this->load->view('account/admin/olahdata_pembimbing');
	}

	public function hasil_pembimbing()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_proposal();
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data2_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$this->load->view('account/admin/details_proposal', $data);
		$this->load->view('account/admin/hasil_pembimbing', $data);
	}

	public function update_pembimbing()
	{
		$this->load->model('olahdata_model');
		$id['judul'] = $this->input->post("judul");
		$data = array(

			//'nim' 					=> $this->input->post("nim"),
			//'judul' 				=> $this->input->post("judul"),
			//'konsentrasi' 			=> $this->input->post("konsentrasi"),
			'pembimbing_1'			=> $this->input->post("pembimbing_1"),
			'pembimbing_2'			=> $this->input->post("pembimbing_2"),
			
		);

		$this->olahdata_model->update_pembimbing($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('olahdata/olah_data_pembimbing');
		//$this->load->view('account/admin/olahdata_pembimbing');
	}

	public function hasil_datatraining()
	{
		$this->load->model('olahdata_model'); 
		$id_mhs = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'data2_proposal' => $this->olahdata_model->edit($id_mhs)

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		//$this->load->view('account/admin/details_proposal');
		$this->load->view('account/admin/hasil_datatraining', $data);
	}

	public function datatraining()
	{
		$this->load->view('account/admin/data_training');	}

	public function olah_data_pembimbing()
	{
		$this->load->model('data_model');
		$data['data'] = $this->data_model->getData_proposal();
		$this->load->view('account/admin/olahdata_pembimbing', $data);
	}

    public function get_download_proposal(){
    		//$this->load->model('olahdata_model');
    		$data = array();

    		//get files from database
    		$data['files'] = $this->filedwn_model->getRows();

    		//load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->file->getRows(array('id_proposal' => $id_proposal));
            
            //file path
            $file = 'upload/pdf/'.$fileInfo['file_name'];
            
            //download file from directory
            force_download($file, NULL);
			//force_download($data_proposal->proposal, NULL);
		}

	function delete($id_mhs){
		$this->load->model('olahdata_model');
		$where = array('id_mhs' => $id_mhs);
		$this->olahdata_model->hapus_data($where,'proposal');
		redirect('olahdata/olah_data_pembimbing');
	}

	public function data_training(){
		$this->load->model('olahdata_model');
		$data['data'] = $this->olahdata_model->get_data_training();
		$this->load->view('account/admin/data_training', $data);
	}

	public function frekuensi_kata(){
		$this->load->model('olahdata_model');
		$data['data'] = $this->olahdata_model->get_frekuensi_kata();
		$this->load->view('account/admin/frekuensi_kata', $data);
	}

	function mahasiswa(){
		$this->load->view('account/admin/data_mahasiswa');
	}

	function data_mahasiswa(){
		$data=$this->mahasiswa_model->mahasiswa_list();
		echo json_encode($data);
	}

	function get_mahasiswa(){
		$nim=$this->input->get('nim');
		$data=$this->mahasiswa_model->get_mahasiswa_by_nim($nim);
		echo json_encode($data);
	}

	function simpan_mahasiswa(){
		$nim=$this->input->post('nim');
		$judul=$this->input->post('judul');
		$konsentrasi=$this->input->post('konsentrasi');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$proposal=$this->input->post('proposal');
		$upload=$this->input->post('upload');
		$data=$this->mahasiswa_model->simpan_mahasiswa($nim,$judul,$konsentrasi,$pembimbing_1,$pembimbing_2,$proposal,$upload);
		echo json_encode($data);
	}

	function update_mahasiswa(){
		$nim=$this->input->post('nim');
		$judul=$this->input->post('judul');
		$konsentrasi=$this->input->post('konsentrasi');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$proposal=$this->input->post('proposal');
		$upload=$this->input->post('upload');
		$data=$this->mahasiswa_model->update_mahasiswa($nim,$judul,$konsentrasi,$pembimbing_1,$pembimbing_2,$proposal,$upload);
		echo json_encode($data);
	}

	function hapus_mahasiswa(){
		$nim=$this->input->post('kode');
		$data=$this->mahasiswa_model->hapus_mahasiswa($nim);
		echo json_encode($data);
	}

	function download($filename = NULL) {
    // load download helder
    $this->load->helper('download');
    // read file contents
    $data = file_get_contents(base_url('/upload/proposal/'.$filename));
    force_download($filename, $data);
	}

}

/* End of file Olahdata.php */
/* Location: ./application/controllers/Olahdata.php */