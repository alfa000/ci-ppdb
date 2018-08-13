<?php

 class M_psb extends CI_Model
 {
 	function tampil_psb(){
 		$query = $this->db->query("SELECT * FROM psb,kompetensi,dok_foto WHERE psb.id_kompetensi=kompetensi.id_kompetensi AND psb.no_reg=dok_foto.no_reg");
 		return $query;
 	}
 	function psb_id($id){
 		$query = $this->db->query("SELECT * FROM psb,kompetensi,dok_foto WHERE psb.id_kompetensi=kompetensi.id_kompetensi AND psb.no_reg=dok_foto.no_reg and psb.no_reg='$id'");
 		return $query;
 	}
 	function ujian($id)
 	{
 		$query = $this->db->query("SELECT * FROM ujian_masuk WHERE no_reg='$id'");
 		return $query;
 	}
 } 

?>