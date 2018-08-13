<?php
/**
 * 
 */
 class M_login extends CI_Model
 { 
 	function validasi($table,$data){
 		$query = $this->db->get_where($table ,$data);
 		return $query;
 	}
 } 

?>