<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
  	 parent::__construct();
  	  $this->load->model('M_psb');
  	  $this->load->model('M_raport');
  	  $this->load->model('M_crud');
      $this->load->model('M_hitung');
  	  $this->load->helper('url','form');
  	  $this->load->library('form_validation','session');
  	  if($this->session->userdata('aktif_admin') != 'Y'){
  	  	redirect('login_adm');
  	  }

  	}
	public function index()
	{
        $data['psb'] = $this->M_hitung->psb_jumlah();
        $data['admin'] = $this->M_hitung->admin_jumlah();
        $data['siswa'] = $this->M_hitung->siswa_jumlah();
		$this->load->view('admin/header');
		$this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
	}
	public function psb(){
		$this->load->view('admin/header');
		$data['data']=$this->M_psb->tampil_psb();	
		$this->load->view('admin/v_datapsb', $data);
        $this->load->view('admin/footer');
	}
	function edit_psb($noreg){
		$this->load->view('admin/header');
		$where = array('no_reg' => $noreg);
		$data['data'] = $this->M_crud->edit_data($where, 'psb')->result();
		$this->load->view('admin/v_editpsb',$data);
        $this->load->view('admin/footer');
	}
	function update_psb(){

         $data = array(
            'nm_siswa' => $this->input->post('nm_siswa'),
         	'tmp_lahir' => $this->input->post('tmp_lahir'),
         	'tgl_lahir' => $this->input->post('tgl_lahir'),
         	'agama' => $this->input->post('agama'),
         	'anak_ke' => $this->input->post('anak_ke'),
         	'jml_saudara' => $this->input->post('jml_saudara'),
         	'status_anak' => $this->input->post('status_anak'),
         	'tinggi_badan' => $this->input->post('tinggi_badan'),
         	'berat_badan' => $this->input->post('berat_badan'),
         	'gol_darah' => $this->input->post('gol_darah'),
         	'alamat_siswa' => $this->input->post('alamat'),
         	'kota_kab' => $this->input->post('kota_kab'),
         	'kode_pos' => $this->input->post('kode_pos'),
         	'hp_siswa' => $this->input->post('hp_siswa'),
         	'tlp_siswa' => $this->input->post('tlp_siswa'),
         	'status_rumah_siswa' => $this->input->post('status_rumah_siswa'),
         	'kendaraan' => $this->input->post('kendaraan'),
         	'alamat_sekolah' => $this->input->post('alamat_sekolah'),
         	'no_ijazah' => $this->input->post('no_ijazah'),
         	'tgl_ijazah' => $this->input->post('tgl_ijazah'),
         	'thn_ijazah' => $this->input->post('thn_ijazah'),
         	'nilai_un' => $this->input->post('nilai_un'),
         	'prestasi_akademik' => $this->input->post('prestasi_akademik'),
         	'prestasi_olahraga' => $this->input->post('prestasi_olahraga'),
         	'prestasi_kesenian' => $this->input->post('prestasi_kesenian'),
         	'nm_orangtua_ayah' => $this->input->post('nm_orangtua_ayah'),
         	'nm_orangtua_ibu' => $this->input->post('nm_orangtua_ibu'),
         	'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
         	'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
         	'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
         	'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
         	'alamat_orgtua' => $this->input->post('alamat_orgtua'),
         	'kota_kab_orgtua' => $this->input->post('kota_kab_orgtua'),
         	'hp_orgtua' => $this->input->post('hp_orgtua'),
         	'nm_wali' => $this->input->post('nm_wali'),
         	'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
         	'penghasilan_wali' => $this->input->post('penghasilan_wali'),
         	'alamat_wali' => $this->input->post('alamat_wali'),
         	'hp_wali' => $this->input->post('hp_wali'),
         	'penanggung_biaya' => $this->input->post('penanggung_biaya'),
          );
         $noreg = $this->input->post('no_reg');

         $validasi = $this->db->update('psb', $data, array('no_reg' => $noreg));
         if(!$validasi){
         	echo "<script>alert('Gagal melakukan update data !');history.go(-1);</script>";
         }else{
         	redirect('admin/psb');
         }

	}
	function read_siswa(){
		$this->load->view('admin/header');
		$data['psb']=$this->M_psb->psb_id($this->uri->segment('3'));
		$data['raport']=$this->M_raport->tampil_raport_id($this->uri->segment('3'));
        $data['ujian']=$this->M_psb->ujian($this->uri->segment('3'));	
		$this->load->view('admin/v_readsiswa', $data);
        $this->load->view('admin/footer');
	}

	function delete($id){
		$where = array('no_reg' => $id);
		$hapus = $this->M_crud->delete($where, array('psb','dok_ijazah','dok_kk','dok_foto','nilai_raport','ujian_masuk'));
		 if(!$hapus){
		 	echo "<script>alert('Data berhasil di hapus !');history.go(-1);</script>";
		 }else{
		 	echo "<script>alert('Data gagal di hapus !');history.go(-1);</script>";
		 }

	}
    function informasi(){
        $this->load->view('admin/header');
        $data['data'] = $this->db->get('informasi')->result();
        $this->load->view('admin/v_informasi', $data);
        $this->load->view('admin/footer');
    }
    function update_info(){

        $data = array(
            'deskripsi_info' => $this->input->post('isi')
        );
        $validasi = $this->db->update('informasi', $data, array('id_info' => '1'));
        if(!$validasi){
            echo "<script>alert('Gagal melakukan update info !');history.go(-1);</script>";
        }else{
            echo "<script>alert('berhasil melakukan update info');history.go(-1);</script>";
        }

    }

    function add_admin(){
        $this->load->view('admin/header');
        $this->load->view('admin/v_admin');
        $this->load->view('admin/footer');
    }

    function simpan_admin(){
        //konfig upload
        $filename = "img-".md5(uniqid());
        $config = array(
               'upload_path' => "./assets/upload/images",
               'allowed_types' => "jpg|png|jpeg|jpg",
               'overwrite' => TRUE,
               'file_name' => $filename
      );
        $this->load->library('upload', $config);
        $hasil = $this->upload->do_upload('gambar');
         if(!$hasil){
            $error = $this->upload->display_errors();
               echo "<script>alert('$error');history.go(-1);</script>";
         }else{
            $gambar = $this->upload->data();
             $data = array(
                        'username' => $this->input->post('username'),
                        'password' => md5($this->input->post('pass')),
                        'nm_lengkap' => $this->input->post('nama_leng'),
                        'alamat_admin' => $this->input->post('alamat'),
                        'email_admin' => $this->input->post('email'),
                        'aktif_admin' => $this->input->post('status'),
                        'pic_admin' => $gambar['file_name']
             );
             
              if($this->db->insert('admin', $data)){
                echo "<script>alert('Berhasil menambahkan admin');history.go(-1);</script>";
            }else{
                echo "<script>alert('Gagal menambahkan admin');history.go(-1);</script>";
            }
         }
    }

    function tanggal_ujian(){
        $this->load->view('admin/header');
        $this->load->view('admin/v_tanggal');
        $this->load->view('admin/header');
    }
    function simpan_tanggal(){
        $data = array(
                'tanggal' => $this->input->post('tgl'),
                'jam' => $this->input->post('jam')
        );
       $validasi = $this->db->update('tanggal_ujian', $data, array('id' => '1'));
         if(!$validasi){
            echo "<script>alert('Gagal melakukan update tanggal ujian !');history.go(-1);</script>";
        }else{
            echo "<script>alert('berhasil melakukan tanggal ujian');history.go(-1);</script>";
        }
    }

    function profile_admin(){
        $this->load->view('admin/header');
        $this->load->view('admin/v_readadmin');
        $this->load->view('admin/footer');   
    }

}
