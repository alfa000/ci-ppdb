<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Silahkan Isi Form DI Bawah Ini
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>siswa/simpan_psb">
    <section class="content" id="siswa">
          <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Profil Siswa</h3>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Reg</label>
                  <input type="text" class="form-control" required="" name="no_reg"  value="<?php echo $this->session->userdata('no_reg')?>" readonly>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control"  readonly="" value="<?php echo $this->session->userdata('nm_siswa') ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" required="" name="tmp_lahir" class="form-control"  placeholder="Masukan Tempat Lahir">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" required="" name="tgl_lahir">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="" name="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Islam">Krister</option>
                    <option value="Islam">Khatolik</option>
                    <option value="Islam">Hindu</option>
                    <option value="Islam">Bunda</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Anak Ke</label>
                  <input type="number" class="form-control" required="" name="anak_ke">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Saudara</label>
                  <input type="number" class="form-control" required="" name="jml_saudara">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Status Anak</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="" name="status_anak">
                    <option value="">Status Anak</option>
                    <option value="Tungal">Tunggal</option>
                    <option value="Sulung">Sulung</option>
                    <option value="Bungsu">Bungsu</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="number" class="form-control"  placeholder="Masukan Tinggi Badan" required="" name="tinggi_badan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="number" class="form-control"  placeholder="Masukan berat Badan" required="" name="berat_badan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Golongan Darah</label>
                  <select class="form-control"  placeholder="Golongan Darah" required="" name="gol_darah">
                    <option value="-">-</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" rows="4" placeholder="jl.xxxx km xx no xx rt xx rw xx" required="" name="alamat"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/Kab</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kota/Kab" required="" name="kota_kab">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kode Pos" required="" name="kode_pos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP SIswa</label>
                  <input type="number" class="form-control"  placeholder="Masukan No HP" required="" name="hp_siswa">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tlp Siswa</label>
                  <input type="number" class="form-control"  placeholder="tlp" required="" name="tlp_siswa">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Status Rumah Siswa</label>
                  <input type="text" class="form-control"  placeholder="Dekat Keramaian/Dekat Pabrik/DLL"  required="" name="status_rumah_siswa">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kendaraan</label>
                  <input type="text" class="form-control" placeholder="Kendaraan" required="" name="kendaraan">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Sekolah Asal</label>
                  <textarea class="form-control" required="" name="alamat_sekolah" rows="4" required="" name="alamat_sekolah" placeholder="Alamat sekolah"></textarea>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content" id="ijazah">
          <div class="box box-primary">
            <div class="box-body">
            <div class="col-md-12">
              <h3 class="box-title text-primary">Data Ijazah</h3>
            </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NO Ijazah</label>
                  <input type="text" class="form-control"  placeholder="Masukan No Ijazah" required="" name="no_ijazah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">TGL Ijazah</label>
                  <input type="date" class="form-control"  placeholder="Masukan Tanggal Ijazah" required="" name="tgl_ijazah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Ijazah</label>
                  <input type="text" class="form-control"  placeholder="Masukan Tahun Ijazah" required="" name="thn_ijazah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai UN</label>
                  <input type="number" class="form-control"  placeholder="Masukan Nilai UN" required="" name="nilai_un">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="prestasi">
              <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Data Prestasi</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi Akademik</label>
                  <input type="text" class="form-control" required="" name="prestasi_akademik" placeholder="Masukan Prestasi Akademik">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi Olahraga</label>
                  <input type="text" class="form-control" required="" name="prestasi_olahraga" placeholder="Masukan Prestasi Olahraga">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi Kesenian</label>
                  <input type="text" class="form-control" required="" name="prestasi_kesenian" placeholder="Masukan Prestasi Kesenian">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="ortu">
              <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Data Orang Tua/Wali</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ayah" placeholder="Masukan Nama ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu</label>
                  <input type="text" class="form-control" required="" name="nm_orangtua_ibu" placeholder="Masukan Nama Ibu">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ayah" placeholder="Masukan Pekerjaan ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" required="" name="pekerjaan_ibu" placeholder="pekerjaan ibu">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ayah</label>
                  <input type="number" class="form-control" required="" name="penghasilan_ayah" placeholder="Penghasilan ayah">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ibu</label>
                  <input type="number" class="form-control" required="" name="penghasilan_ibu" placeholder="Penghasilan ibu">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Orang Tua</label>
                  <textarea class="form-control" rows="4" required="" name="alamat_orgtua"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/kab</label>
                  <input type="text" class="form-control" required="" name="kota_kab_orgtua" placeholder="kota/kab">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control" required="" name="kode_pos_orgtua" placeholder="Kode pos">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="number" class="form-control" required="" name="hp_orgtua" placeholder="Masukan No HP">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Wali</label>
                  <input type="text" class="form-control" name="nm_wali" placeholder="Masukan Nama wali">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Wali</label>
                  <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Pekerjaan wali">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Wali</label>
                  <input type="number" class="form-control" name="penghasilan_wali" placeholder="Penghasilan wali">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Wali</label>
                  <textarea class="form-control" rows="4" name="alamat_wali" placeholder="Alamat wali"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="number" class="form-control" name="hp_wali" placeholder="Masukan no hp wali">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penangung Biaya</label>
                  <input type="text" class="form-control" name="penanggung_biaya" required="" placeholder="Penanggung biaya">
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="content" id="dokumen">
            <div class="box box-primary">
              <div class="box-body">
                <div class="col-md-12">
                <h3 class="box-title text-primary">Unggah Kelengkapan Dokument</h3>
              </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Siswa</label>
                  <input type="file" required="" name="gambar1">
                  <p class="help-block">Masukan foto Siswa</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Kartu Keluarga</label>
                  <input type="file" required="" name="gambar2">
                  <p class="help-block">Masukan foto Kartu Keluarga</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto Ijazah</label>
                  <input type="file" required="" name="gambar3">
                  <p class="help-block">Masukan foto Ijazah</p>
                </div>
              </div>
              </div>
            </div>
          </section>
          <section class="content" id="">
            <div class="box box-primary">
              <div class="box-body">
                <div class="col-md-12">
                <h3 class="box-title text-primary">Data Raport</h3>
              </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mapel</th>
                  <th>Nilai 1</th>
                  <th>Nilai 2</th>
                  <th>Nilai 3</th>
                  <th>Nilai 4</th>
                  <th>Nilai 5</th>
                  <th>Rata-rata</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($mapel->result_object() as $row => $v){
                echo "
                <tr>
                  <td style='width: 30%'> $v->mapel <input type='hidden' required name='mapel[]' value='$v->id_mapel'></td>
                  <td><input style='width: 50%' type='number' required name='nil1[]'></td>
                  <td><input style='width: 50%' type='number' required name='nil2[]'></td>
                  <td><input style='width: 50%' type='number' required name='nil3[]'></td>
                  <td><input style='width: 50%' type='number' required name='nil4[]'></td>
                  <td><input style='width: 50%' type='number' required name='nil5[]'></td>
                  <td><input style='width: 75%' type='number' required name='nil_ratarata[]'></td>
                </tr>
                ";
                }
                ?>
                </tbody>
              </table>
              </div>
            </div>
          </section>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
      </div>
  </div>
  <!-- /.content-wrapper -->
  