<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('crud_model');
		//$this->load->library('form_validation');
		//$this->load->model('Uploadimage_model', 'uploadimage');
		$this->load->library(array('form_validation', 'session'));
    }

	// List all your items
	public function index()
	{
		
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function edit()
	{
		//$id = $this->uri->segment(3);
		$data['query'] = $this->crud_model->edit($id);
		$this->load->view('account/mahasiswa/edit_profil', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$data = array('' => $this->input->post('proposal'), 'nopol' => $this->input->post('nopol'));
		
		$proses = $this->crud_model->update($id, $data);
		if (!$proses) {
			header('Location: tampil');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil/')."'>Tampil data</a>";
		}
	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
