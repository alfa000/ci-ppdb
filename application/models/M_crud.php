<?php
/**
 * 
 */
 class M_crud extends CI_Model
 {
 	function simpan($data, $table){
 		$query = $this->db->insert($table, $data);
 	}
    function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
  	}
   function edit_data($where, $table){
    return $this->db->get_where($table, $where);
  }

 } 

?>