  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update tanggal ujian offline
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">tanggal ujuan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box-footer">
            <!-- /.box-header -->

             <form action="<?php echo base_url()?>/admin/simpan_tanggal" method="post" enctype="multipart/form-data">
                <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal ujian</label>
                  <input type="date" class="form-control" name="tgl" required="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jam ujian</label>
                  <input type="time" class="form-control" name="jam" required="">
                </div>
              </div>
             <div>
              <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
             <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>
             </form>
 
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