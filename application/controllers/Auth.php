<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
 
 		public function index() {
  			$this->load->view('index');
 		}
 		
 		public function ceklogin() {
 			//mahasiswa
 			$this->load->model('user_model'); //load model load
  			if (isset($_POST['login'])){
   				$email = $this->input->post('email',true);
   				$pass = md5($this->input->post('pass',true));
   				$cek = $this->user_model->proseslogin_mhs($email, $pass);
   				$result = count($cek);

   			if ($result > 0){
    			$sess_data = $this->db->get_where('mahasiswa',
    									array('email'=>$email, 'password' => $pass))->row();
    			$data = array('masuk_mhs' => true,
    						  'nim' => $sess_data->nim,
      					  'namalengkap' => $sess_data->namalengkap, 
      					  'email' => $sess_data->email,
    						  'password' => $sess_data->password);
    			$this->session->set_userdata($data);
    		
    		/*if ($sess_data->level == '1')
    		{
     			redirect('main/dashboard');
    			} */
    		/*elseif ($sess_data->level == '2')
    		{
     			redirect('dosen/dashboard');
    			}*/
    		if ($sess_data->level =='3')
    		{
    			redirect('mahasiswa/index');
    			}
   			
   			}
   			//dosen
   			if (isset($_POST['login'])){
   				$email = $this->input->post('email',true);
   				$pass = md5($this->input->post('pass',true));
   				$cek = $this->user_model->proseslogin_dosen($email, $pass);
   				$result = count($cek);
   			if ($result > 0){
    			$sess_data = $this->db->get_where('dosen',
    									array('email'=>$email, 'password' => $pass))->row();
    			$data = array('masuk' => true,
    						  'nip' => $sess_data->nip,
      					  'nama_dosen' => $sess_data->nama_dosen, 
      					  'email' => $sess_data->email,
    						  'password' => $sess_data->password);
    			$this->session->set_userdata($data);
    		
    		if ($sess_data->level == '1')
    		{
     			redirect('main/dashboard');
    			}
    		if ($sess_data->level == '2')
    		{
     			redirect('dosen/dashboard');
    		}
   			
   			}}
   			
			else {
    			echo "<script>alert('Login Gagal! Cek Email atau Password');history.go(-1);</script>";
    			//redirect('auth/index');
   			} 
   		}
 	}

 		public function admin() {
 	 		$data["title"] = "Halaman Admin";
  			$this->load->view('account/admin/dashboard', $data);
 		}

 		public function dosen() {
  			$data["title"] = "Halaman Dosen";
  			$this->load->view('account/dosen/index', $data);
 		}

 		public function mahasiswa() {
  			$data["title"] = "Halaman Mahasiswa";
  			$this->load->view('account/mahasiswa/index', $data);
 		}

 		public function logout() {
  			$this->session->sess_destroy();
  			redirect('auth/index');
 		}

 	    public function register() {
        $data['title'] = 'Register';
        $this->load->model('auth_model');

        if (count($_POST)) {
            $this->load->helper('security');

            $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required');
            $this->form_validation->set_rules('nim', 'NIM', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[mahasiswa.email]');

            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Password', 'trim|required|matches[password]|min_length[6]|alpha_numeric|callback_password_check');
            
            if ($this->form_validation->run() == false) {
                $data['notif']['message'] = validation_errors();
                $data['notif']['type'] = 'danger';
            } 
            else {
                $data['notif'] = $this->auth_model->register();
                $this->session->set_flashdata('success', 'Sign Up Succes!');
				redirect('auth/register');
            }
        }

        if ($this->session->userdata('logged_in')) {
            redirect(base_url('dashboard'));
            exit;
        }


        /*
         * Load view
         */
        $this->load->view('register');
    }

    public function password_check($str) {
        if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
            return true;
        }
        return false;
    }

}