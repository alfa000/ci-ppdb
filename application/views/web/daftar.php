<?php include 'layout/header.php';?>
   

  <div class="page-header-overlay">
            <div class="container">
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">

        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h3>Daftar</h3>

                    <form method="post" action="<?php echo base_url().'web/registrasi';?>">
                        <input type="hidden"  name="noreg" value="<?php echo "$data"; ?>">
                        <input type="number" placeholder="NISN" name="nisn" required>
                        <input type="text" placeholder="NAMA" name="nama" required>
                        <input type="email" placeholder="EMAIL" name="email" required> 
                        <br><br>
                        <input type="radio" name="jk" value="L" required> laki-laki &nbsp;<input type="radio" name="jk" value="P" required>Perempuan <br>
                        <input type="text" placeholder="Asal sekolah" name="asalsek" required>
                        <select name="jurusan">
                            <option value="13">Rekayasa perangkat lunak</option>
                            <option value="12">Administrasi Perkantoran</option>
                            <option value="11">Akuntansi</option>
                            <option value="14">Teknik Komputer dan jaringan</option>
                        </select>
                        <input type="submit" value="daftar" name="submit">
                    </form>
                </div><!-- .daftar-form -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

<?php include 'layout/footer.php';?>