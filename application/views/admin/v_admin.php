  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box-footer">
            <!-- /.box-header -->

             <form action="<?php echo base_url()?>/admin/simpan_admin" method="post" enctype="multipart/form-data">
                <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" name="pass">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama lengkap</label>
                  <input type="text" class="form-control" name="nama_leng">
                </div>
              </div>
                  <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" rows="4" placeholder="jl.RT RW NET" name="alamat"></textarea>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email admin</label>
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Aktif admin</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="status">
                    <option value="">Pilih Status</option>
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                  </select>
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFile">Foto admin</label>
                  <input type="file" name="gambar">
                  <p class="help-block">Masukan foto admin</p>
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
 