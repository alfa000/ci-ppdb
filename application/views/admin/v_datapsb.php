  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta didik baru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data psb</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Reg</th>
                  <th>NIS</th>
                  <th>NINS</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Kompetensi</th>
                  <th>Jns Kelamin</th>
                  <th>Tmp Lahir</th>
                  <th>TGL Lahir</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data->result_array() as $row): 
                    $noreg = $row['no_reg'];
                  ?>
                <tr>
                  <td style="vertical-align:middle"><a href="<?=base_url()?>admin/read_siswa/<?=$row['no_reg']?>"><?=$row['no_reg']?></a></td>
                  <td style="vertical-align:middle"><?=$row['nis'];?></td>
                  <td style="vertical-align:middle"><?=$row['nisn'];?></td>
                  <td style="vertical-align:middle"><?=$row['nm_siswa'];?></td>
                  <td style="vertical-align:middle"><img width="70px" src="<?=base_url()?>assets/upload/images/<?=$row['pic_foto'];?>"></td>
                  <td style="vertical-align:middle"><?=$row['bid_kompetensi'];?></td>
                  <td style="vertical-align:middle"><?=$row['jns_kelamin'];?></td>
                  <td style="vertical-align:middle"><?=$row['tmp_lahir'];?></td>
                  <td style="vertical-align:middle"><?=$row['tgl_lahir'];?></td>
                  <td style="vertical-align:middle"><?=$row['agama'];?></td>
                  <td style="vertical-align:middle"><a href="<?php echo base_url()?>admin/edit_psb/<?= $noreg ?>"><button type="button" class="btn btn-primary" rows="10">Edit</button></a><a href="<?php echo base_url()?>/admin/delete/<?= $noreg ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                </tr>
                <?php 
                endforeach;
                 ?>
                </tbody>
              </table>

            </div>
            <div class="box-footer">
              <button onclick="" class="btn btn-primary">Print</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
