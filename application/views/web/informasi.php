    <?php include 'layout/header.php';?>
        <div class="page-header-overlay">
            <div class="container">
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">


        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-1">
                <div class="post-share">
                </div><!-- .post-share -->
            </div><!-- .col -->
                
            <div class="col-12 col-lg-8">
                <?php foreach($data->result_array() as $row){?>
                <div class="single-post-wrap">
                    <center><h1>Penerimaan Siswa Baru</h1></center>
                    <br>
                    <p><?= $row['deskripsi_info'];?></p>
                </div><!-- .single-post-wrap -->
                <?php }
                ?>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
    <?php include 'layout/footer.php';?>