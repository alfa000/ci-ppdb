<?php
/**
 * 
 */
 class M_hitung extends CI_Model
 { 
 	function psb_jumlah(){
 	$psb = $this->db->get('psb')->num_rows();
 	return $psb;
 }
 function admin_jumlah(){
 	$admin = $this->db->get('admin')->num_rows();
 	return $admin;
 }
 function siswa_jumlah(){
 	$admin = $this->db->query("SELECT COUNT(status_aktivasi) AS id FROM psb WHERE status_aktivasi='Y'");
 	return $admin;
 }
 } 

?>