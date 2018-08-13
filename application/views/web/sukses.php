<?php 
 foreach ($data->result_array() as $row):
      $noreg = $row['no_reg'];
      $pass = $row['password'];
      echo "<script>alert('no pendaftaran : $noreg password : $pass');window.location='../login_psb';</script>";
 endforeach;
?>