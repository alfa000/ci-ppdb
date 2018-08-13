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
        <li class="active">Data psb</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box-footer">
            <!-- /.box-header -->
            <?php foreach($data as $row){?>
             <form action="<?php echo base_url()?>/admin/update_info/1" method="post">
                <textarea class="ckeditor" id="ckeditor" name="isi"><?php echo $row->deskripsi_info?></textarea>
             <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
             </form>
             <?php } ?>
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