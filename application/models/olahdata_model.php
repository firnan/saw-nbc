<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahdata_model extends CI_Model {

	public function edit($id_mhs)
	{
		
		$query = $this->db->where("id_mhs", $id_mhs)->get("proposal");

		if($query){
			return $query->row_object();
		}else{
			return false;
		}
	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("proposal", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function update_proposal($data, $id)
	{
		
		$query = $this->db->update("proposal", $data, $id);
		//$query = mysql_query("UPDATE proposal WHERE judul = '$id'");
		//$query=$this->db->query("UPDATE proposal SET konsentrasi = '$data' WHERE judul='$id'");
		//return $query;
		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function update_pembimbing($data, $id)
	{
		
		$query = $this->db->update("proposal", $data, $id);
		//$query = mysql_query("UPDATE proposal WHERE judul = '$id'");
		//$query=$this->db->query("UPDATE proposal SET konsentrasi = '$data' WHERE judul='$id'");
		//return $query;
		if($query){
			return true;
		}else{
			return false;
		}

	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('proposal');
        $this->db->order_by('upload_at','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

    public function getDown()
    {
    	$requested_file = $this->uri->segment(3);
    	$this->load->helper('download');
    	$this->db->select('*');
    	$this->db->where('id_proposal', $requested_file);
    	$query = $this->db->get('proposal');
    	foreach ($query->result() as $row) {
    		$file_data = file_get_contents(base_url()."upload/pdf/".$proposal);
    		$file_name = $$proposal;
    	}
    	force_download($file_name,$file_data);
    }

    public function download($id_proposal)
    {
    	$query = $this->db->where("id_proposal", $id_proposal)->get("proposal");

		if($query){
			return $query->result_array();
		}else{
			return false;
		}

    }

    public function get_data_training() 
	{
		$data = $this->db->get('trainingset');
		return $data->result_object();
	}

	public function get_frekuensi_kata() 
	{
		$data = $this->db->get('wordfrequency');
		return $data->result_object();
	}

	function get_data_stok(){
        $query = $this->db->query("SELECT upload_at,SUM(konsentrasi) AS konsentrasi FROM proposal GROUP BY upload_at");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data(){
      //$this->db->select('konsentrasi');
      //$result = $this->db->get('mahasiswa');
    	//$result = $this->db->query("SELECT konsentrasi from mahasiswa");
      //return $result;
    	return $this->db->get('mahasiswa')->result(); 
  }

}

/* End of file olahdata_model.php */
/* Location: ./application/models/olahdata_model.php */