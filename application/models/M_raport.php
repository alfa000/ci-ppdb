<?php

 class M_raport extends CI_Model
 {
 	function tampil_raport(){
 		$query = $this->db->query("SELECT * FROM psb,nilai_raport,mapel WHERE psb.no_reg=nilai_raport.no_reg AND nilai_raport.id_mapel=mapel.id_mapel");
 		return $query;
 	}
 	function tampil_raport_id($id){
 		$query = $this->db->query("SELECT * FROM psb,nilai_raport,mapel WHERE psb.no_reg=nilai_raport.no_reg AND nilai_raport.id_mapel=mapel.id_mapel and psb.no_reg='$id'");
 		return $query;
 	}
 	function input_raport($result=array()){
 		$total_array = count($result);
		if($total_array != 0)
		{	
 			$this->db->insert_batch('nilai_raport',$result);
		}
 	}
 } 

?>