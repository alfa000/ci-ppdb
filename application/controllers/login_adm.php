<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_adm extends CI_Controller 
{
	function __construct(){
  	 parent::__construct();
  	  $this->load->model('M_login');
  	  $this->load->helper('url','form');

  	}
 function index(){
 	$data['title'] = "Login Admin PSB";
 	$this->load->view('admin/v_loginadmin', $data);
 }

 function cek_login(){
		$data = array(
                       'username' => $this->input->post('username'),
                       'password' => md5($this->input->post('password'))
		);

		$valid = $this->M_login->validasi('admin', $data);
		 if($valid->num_rows() == 1){
		  	 foreach ($valid->result() as $key) {

		  	 	$session_data['username'] = $key->username;
		  	 	$session_data['nm_lengkap'] = $key->nm_lengkap;
		  	 	$session_data['aktif_admin'] = $key->aktif_admin;
		  	 	$session_data['pic_admin'] = $key->pic_admin;
		  	 	$session_data['alamat_admin'] = $key->alamat_admin;
		  	 	$session_data['email_admin'] = $key->email_admin; 
		  	 
		  	 	$this->session->set_userdata($session_data);
		  	 }
		  	 if($this->session->userdata('aktif_admin') == 'Y'){
		  	 	redirect(base_url('admin'));
		  	 }
		  }else{
		  	 	echo "<script>alert('Gagal Login: Cek ID pendaftaran , password!');history.go(-1);</script>";
		  	 }
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login_adm');
	}
}
?>