<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_psb extends CI_Controller
{
	function __construct(){
  	 parent::__construct();
  	  $this->load->model('M_login');
  	  $this->load->helper('url','form');

  	}
	public function index()
	{
		$data['title'] = "HALAMAN LOGIN PESERTA DIDIK BARU";
		$this->load->view('siswa/v_loginsiswa', $data);
	}

	function cek_login(){
		$data = array(
                       'no_reg' => $this->input->post('username'),
                       'password' => $this->input->post('password')
		);

		$valid = $this->M_login->validasi('psb',$data);
		 if($valid->num_rows() == 1){
		  	 foreach ($valid->result() as $key) {
		  	 	$session_data['status'] = 'Online';
		  	 	$session_data['no_reg'] = $key->no_reg;
		  	 	$session_data['nm_siswa'] = $key->nm_siswa;
		  	 	$session_data['aktivasi'] = $key->status_aktivasi;
		  	 	
		  	 	$this->session->set_userdata($session_data);
		  	 }
		  	 if($this->session->userdata('status') == 'Online'){
		  	 	redirect(base_url('siswa'));
		  	 }
		  }else{
		  	 	echo "<script>alert('Gagal Login: Cek ID pendaftaran , password!');history.go(-1);</script>";
		  	 }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login_psb');
	}

}