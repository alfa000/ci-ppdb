  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta Ujian
  
        <small>KOntol</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data admin</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box box-primary">
            <div class="box-header">
              <h2 class="box-title text-primary"><b>Profil</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%">
            <tr>
              <td>Username </td>
              <td>:</td>
              <td><?php echo $this->session->userdata('username') ?></td>
              <td rowspan="14"><img width="100px" src="<?=base_url()?>assets/upload/images/<?php echo $this->session->userdata('pic_admin') ?>"></td>
            </tr>
            <tr>
              <td>Nama lengkap</td>
              <td>:</td>
              <td><?php echo $this->session->userdata('nm_lengkap') ?></td>
            </tr>
            <tr>
              <td>Alamat Admin</td>
              <td>:</td>
              <td><?php echo $this->session->userdata('alamat_admin') ?></td>
            </tr>
            <tr>
              <td>Email admin</td>
              <td>:</td>
              <td><?php echo $this->session->userdata('email_admin') ?></td>
            </tr>
            <tr>
              <td>Status admin</td>
              <td>:</td>
              <td><?php echo $this->session->userdata('aktif_admin') ?></td>
            </tr>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
