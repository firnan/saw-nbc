<?php
class Pembimbing extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('pembimbing_model');
	}
	
	public function data_pembimbing_1()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_pem();
		//$this->load->view('account/admin/cobapem', $data);
		$this->load->model('data_model'); 
		$nama_dosen = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'datapem' => $this->data_model->tampil_pembimbing_1()

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		$this->load->view('account/admin/datapembimbing_1', $data);
	}

	public function data_pembimbing_2()
	{
		//$this->load->model('data_model');
		//$data['data'] = $this->data_model->getData_pem();
		//$this->load->view('account/admin/cobapem', $data);
		$this->load->model('data_model'); 
		$nama_dosen = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Proposal',
			'datapem' => $this->data_model->tampil_pembimbing_2()

		);
		//$data_proposal = $this->olahdata_model->edit($id_proposal);
		$this->load->view('account/admin/datapembimbing_2', $data);
	}
	
	function index(){
		$this->load->view('account/admin/data_pembimbing');
	}

	function data_pembimbing(){
		$data=$this->pembimbing_model->pembimbing_list();
		echo json_encode($data);
	}

	function get_pembimbing(){
		$id_pembimbing=$this->input->get('id_pembimbing');
		$data=$this->pembimbing_model->get_pembimbing_by_id($id_pembimbing);
		echo json_encode($data);
	}

	function simpan_pembimbing(){
		$id_pembimbing=$this->input->post('id_pembimbing');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung=$this->input->post('jabfung');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$total=$this->input->post('total');
		$data=$this->pembimbing_model->simpan_pembimbing($id_pembimbing,$nama_dosen,$jabfung,$pembimbing_1,$pembimbing_2,$total);
		echo json_encode($data);
	}

	function update_pembimbing(){
		$id_pembimbing=$this->input->post('id_pembimbing');
		$nama_dosen=$this->input->post('nama_dosen');
		$jabfung=$this->input->post('jabfung');
		$pembimbing_1=$this->input->post('pembimbing_1');
		$pembimbing_2=$this->input->post('pembimbing_2');
		$total=$this->input->post('total');
		$data=$this->pembimbing_model->update_pembimbing($id_pembimbing,$nama_dosen,$jabfung,$pembimbing_1,$pembimbing_2,$total);
		echo json_encode($data);
	}

	function hapus_pembimbing(){
		$id_pembimbing=$this->input->post('kode');
		$data=$this->pembimbing_model->hapus_pembimbing($id_pembimbing);
		echo json_encode($data);
	}

}