<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function getProfile()
		{
			$res = $this->db->query("
				SELECT * FROM mahasiswa 
				WHERE nim='".$this->session->userdata('nim')."'
				");
			return $res;
		}	

	public function getProposal()
	{
		$res = $this->db->query("
			SELECT * FROM proposal
			WHERE nim='".$this->session->userdata('nim')."'
				");
		return $res;
	}

	public function getLapAkhir()
	{
		$res = $this->db->query("
			SELECT * FROM laporan_akhir
			WHERE nim='".$this->session->userdata('nim')."'
				");
		return $res;
	}

	public function getPendadaran()
	{
		$res = $this->db->query("
			SELECT * FROM pendadaran
			WHERE nim='".$this->session->userdata('nim')."'
				");
		return $res;
	}

	public function getNews()
	{
		$hasil=$this->db->query("SELECT * FROM news WHERE status='Publish'");
		return $hasil->result();
	}

	public function pembimbing_list(){
		$hasil=$this->db->query("SELECT * FROM dosen");
		return $hasil->result();
	}

	function mahasiswa_list(){
		$hasil=$this->db->query("SELECT * FROM proposal");
		return $hasil->result();
	}

	function simpan_mahasiswa($nim,$judul,$konsentrasi,$pembimbing_1,$pembimbing_2,$proposal,$upload){
		$hasil=$this->db->query("INSERT INTO proposal (nim,judul,konsentrasi,pembimbing_1,pembimbing_2,proposal,upload)VALUES('$nim','$judul','$konsentrasi','$pembimbing_1','$pembimbing_2','$proposal','$upload')");
		return $hasil;
	}

	function get_mahasiswa_by_nim($nim){
		$hsl=$this->db->query("SELECT * FROM proposal WHERE nim='$nim'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_mhs' => $data->id_mhs,
					'nim' => $data->nim,
					'judul' => $data->judul,
					'konsentrasi' => $data->konsentrasi,
					'pembimbing_1' => $data->pembimbing_1,
					'pembimbing_2' => $data->pembimbing_2,
					'proposal' => $data->proposal,
					'upload' => $data->upload,
					);
			}
		}
		return $hasil;
	}

	function update_mahasiswa($nim,$judul,$konsentrasi,$pembimbing_1,$pembimbing_2,$proposal,$upload){
		$hasil=$this->db->query("UPDATE proposal SET nim='$nim',judul='$judul',konsentrasi='$konsentrasi',pembimbing_1='$pembimbing_1',pembimbing_2='$pembimbing_2',proposal='$proposal',upload='$upload' WHERE nim='$nim'");
		return $hasil;
	}

	function hapus_mahasiswa($nim){
		$hasil=$this->db->query("DELETE FROM proposal WHERE nim='$nim'");
		return $hasil;
	}

	private $_table = "users";

    public $users_id;
    public $namalengkap;
    public $nim;
    public $email;
    public $password;
    public $level;
    public $created_at;

    public function rules()
    {
        return [
            ['field' => 'namalengkap',
            'label' => 'Nama Lengkap',
            'rules' => 'required'],

            ['field' => 'nim',
            'label' => 'NIM NIP',
            'rules' => 'numeric'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required'],

            ['field' => 'created_at',
            'label' => 'Created At',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["users_id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->users_id = $post["users_id"];
        $this->namalengkap = $post["namalengkap"];
        $this->nim = $post["nim"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->created_at = $post["created_at"];
        $this->db->update($this->_table, $this, array('users_id' => $post['users_id']));
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get_profil_by_id($users_id = 0)
		{
		if ($users_id === 0)
		{
		$query = $this->db->get('users');
		return $query->result_array();
		}
		 
		$query = $this->db->get_where('users', array('users_id' => $users_id));
		return $query->row_array();
		}
		 
	public function get_profil($users_id = FALSE)
		{
		if ($users_id === FALSE)
		{
		$query = $this->db->get('users');
		return $query->result();
		}
		 
		$query = $this->db->get_where('users', array('users_id' => $users_id));
		return $query->result();
		}

	public function set_faqs($users_id = 0)
		{
		$this->load->helper('url');
		 
		//$slug = url_title($this->input->post('title'), 'dash', TRUE);
		 
		$data = array(
		'namalengkap' => $this->input->post('namalengkap'),
		//'slug' => $slug,
		'nim' => $this->input->post('nim'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password')
		);
		 
		if ($users_id == 0) {
		return $this->db->insert('users', $data);
		} else {
		$this->db->where('users_id', $users_id);
		return $this->db->update('users', $data);
		}
		}

}

/* End of file mahasiswa_model.php */
/* Location: ./application/models/mahasiswa_model.php */