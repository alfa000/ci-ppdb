<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

 
	function __construct(){
  	 parent::__construct();
  	  date_default_timezone_set('Asia/Jakarta');
  	  $this->load->model('M_tampil');
  	  $this->load->model('M_crud');
  	  $this->load->helper('url','form');

  	}
	public function index()
	{
		$this->load->view('web/index');
	}
	function cara_daftar(){
		$data['data'] = $this->M_tampil->tampil_cara();
		$this->load->view('web/cara_daftar', $data);
	}

	function daftar(){
		$data['data']  = $this->M_tampil->auto_inc();
		$this->load->view('web/daftar', $data);
	}
	function kontak(){
		$this->load->view('web/kontak');
	}

	function informasi(){
		$data['data'] = $this->M_tampil->tampil_info();
		$this->load->view('web/informasi', $data);
	}


  function registrasi(){

  	if(isset($_POST['submit'])){
		  	 $noreg = $this->input->post('noreg'); 
		  	 $tanggal = date('d.m.y');
		  	 $jam = date('H:i:s');
		     $pass = uniqid();
		     $data = array(
		     	       'no_reg' => $noreg,
		     	       'tgl_daftar' => $tanggal,
		     	       'jam_daftar' => $jam,
		     	       'password' => $pass,
		               'nisn' => $this->input->post('nisn'),
		               'nm_siswa' => $this->input->post('nama'),
		               'email_siswa' => $this->input->post('email'),
		               'jns_kelamin' => $this->input->post('jk'),
		               'asal_sekolah' => $this->input->post('asalsek'),
		               'id_kompetensi' => $this->input->post('jurusan')
		     );

		     $aksi = $this->M_crud->simpan($data, 'psb');
  		     $noregis = array('no_reg' => $noreg);
		     $data['data'] = $this->M_tampil->get_pass($noregis); 
		     $this->load->view('web/sukses', $data);
		     return $aksi;

  }else{
  		echo "<script>alert('Gagal Melakukan registrasi !');history.go(-1);</script>";
  }
}

}
