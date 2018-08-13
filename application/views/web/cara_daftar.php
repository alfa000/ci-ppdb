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
                <div class="single-post-wrap">
                    <?php foreach ($data->result_array() as $isi):
                        $cara = $isi['deskripsi_caradft'];
                    ?>
                    <h1>Cara Daftar</h1>
                    <br>
                    <p><?php echo $cara;?></p>
                </div><!-- .single-post-wrap -->
            <?php endforeach; ?>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
    <?php include 'layout/footer.php';?>