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
    <?php foreach($data as $row){?>
    <form role="form" method="post"  action="<?php echo base_url()?>admin/update_psb">
    <section class="content" id="siswa">
          <div class="box box-primary">
              <div class="box-body">
              <div class="col-md-12">
                <h3 class="box-title text-primary">Profil Siswa</h3>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Reg</label>
                  <input type="text" class="form-control" name="no_reg"  value="<?php echo $row->no_reg ?>" readonly>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nm_siswa" value="<?php echo $row->nm_siswa ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" name="tmp_lahir" class="form-control" value="<?php echo $row->tmp_lahir ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lahir?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="agama">
                    <option value="">Pilih Agama</option>
                    <option <?php if($row->agama == 'Islam'){ echo "selected";}?> value="Islam">Islam</option>
                    <option <?php if($row->agama == 'kristen'){ echo "selected";}?> value="kristen">Krister</option>
                    <option <?php if($row->agama == 'katolik'){ echo "selected";}?> value="katolik">Khatolik</option>
                    <option <?php if($row->agama == 'hindu'){ echo "selected";}?> value="hindu">Hindu</option>
                    <option <?php if($row->agama == 'buddha'){ echo "selected";}?> value="buddha">buddha</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Anak Ke</label>
                  <input type="number" class="form-control" name="anak_ke" value="<?php echo $row->anak_ke?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Saudara</label>
                  <input type="number" class="form-control" name="jml_saudara" value="<?php echo $row->jml_saudara?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Status Anak</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="status_anak">
                    <option value="">Status Anak</option>
                    <option <?php if($row->status_anak == 'Tungal'){ echo "selected";}?> value="Tungal">Tunggal</option>
                    <option <?php if($row->status_anak == 'Sulung'){ echo "selected";}?> value="Sulung">Sulung</option>
                    <option <?php if($row->status_anak == 'Bungsu'){ echo "selected";}?> value="Bungsu">Bungsu</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="number" class="form-control"  placeholder="Masukan Tinggi Badan" name="tinggi_badan" value="<?php echo $row->tinggi_badan?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="number" class="form-control"  placeholder="Masukan Tinggi Badan" name="berat_badan" value="<?php echo $row->berat_badan?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Golongan Darah</label>
                  <input type="text" class="form-control"  placeholder="" name="gol_darah" value="<?php echo $row->gol_darah?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" rows="4" placeholder="jl.xxxx km xx no xx rt xx rw xx" name="alamat"><?php echo $row->alamat_siswa?></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/Kab</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kota/Kab" name="kota_kab" value="<?php echo $row->kota_kab?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control"  placeholder="Masukan Kope Pos" name="kode_pos" value="<?php echo $row->kode_pos?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP SIswa</label>
                  <input type="number" class="form-control"  placeholder="Masukan No HP" name="hp_siswa" value="<?php echo $row->hp_siswa?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tlp Siswa</label>
                  <input type="number" class="form-control"  placeholder="tlp" name="tlp_siswa" value="<?php echo $row->tlp_siswa?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Status Rumah Siswa</label>
                  <input type="text" class="form-control"  placeholder=""  name="status_rumah_siswa" value="<?php echo $row->status_rumah_siswa?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kendaraan</label>
                  <input type="text" class="form-control" name="kendaraan" value="<?php echo $row->kendaraan?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Sekolah Asal</label>
                  <textarea class="form-control" name="alamat_sekolah" rows="4" name="alamat_sekolah"><?php echo $row->alamat_sekolah?></textarea>
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
                  <input type="text" class="form-control"  placeholder="Masukan No Ijazah" name="no_ijazah" value="<?php echo $row->no_ijazah?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">TGL Ijazah</label>
                  <input type="date" class="form-control"  placeholder="Masukan Tanggal Ijazah" name="tgl_ijazah" value="<?php echo $row->tgl_ijazah?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Ijazah</label>
                  <input type="text" class="form-control"  placeholder="Masukan Tahun Ijazah" name="thn_ijazah" value="<?php echo $row->thn_ijazah?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai UN</label>
                  <input type="number" class="form-control"  placeholder="Masukan Nilai UN" name="nilai_un" value="<?php echo $row->nilai_un?>">
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
                  <input type="text" class="form-control" name="prestasi_akademik" placeholder="Masukan Prestasi Akademik" value="<?php echo $row->prestasi_akademik?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi Olahraga</label>
                  <input type="text" class="form-control" name="prestasi_olahraga" placeholder="Masukan Prestasi Olahraga" value="<?php echo $row->prestasi_olahraga?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prestasi Kesenian</label>
                  <input type="text" class="form-control" name="prestasi_kesenian" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->prestasi_kesenian?>">
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
                  <input type="text" class="form-control" name="nm_orangtua_ayah" placeholder="Masukan Nama ayah" value="<?php echo $row->nm_orangtua_ayah?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu</label>
                  <input type="text" class="form-control" name="nm_orangtua_ibu" placeholder="Masukan nama ibu" value="<?php echo $row->nm_orangtua_ibu?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukan Pekerjaan ayah" value="<?php echo $row->pekerjaan_ayah?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->pekerjaan_ibu?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ayah</label>
                  <input type="text" class="form-control" name="penghasilan_ayah" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->penghasilan_ayah?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Ibu</label>
                  <input type="text" class="form-control" name="penghasilan_ibu" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->penghasilan_ibu?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Orang Tua</label>
                  <textarea class="form-control" rows="4" name="alamat_orgtua"><?php echo $row->alamat_orgtua?></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota/kab</label>
                  <input type="text" class="form-control" name="kota_kab_orgtua" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->kota_kab_orgtua?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control" name="kode_pos_orgtua" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->kode_pos_orgtua?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="number" class="form-control" name="hp_orgtua" placeholder="Masukan No HP" value="<?php echo $row->hp_orgtua?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Wali</label>
                  <input type="text" class="form-control" name="nm_wali" placeholder="Masukan Prestasi Olahraga" value="<?php echo $row->nm_wali?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan Wali</label>
                  <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->pekerjaan_wali?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penghasilan Wali</label>
                  <input type="text" class="form-control" name="penghasilan_wali" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->penghasilan_wali?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Wali</label>
                  <textarea class="form-control" rows="4" name="alamat_wali"><?php echo $row->alamat_wali?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="text" class="form-control" name="hp_wali" placeholder="Masukan Prestasi Kesenian" value="<?php echo $row->hp_wali?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Penangung Biaya</label>
                  <input type="text" class="form-control" required="" name="penanggung_biaya" placeholder="Orang Tua/Wali" value="<?php echo $row->penanggung_biaya?>">
                </div>
              </div>
            </div>
          </div>
          </section>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
          <?php } ?>
      </div>
  </div>
  <!-- /.content-wrapper -->