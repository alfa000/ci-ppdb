<?php

class M_tampil extends CI_Model
{
	function tampil_cara(){
		$query = $this->db->get('cara_daftar');
		return $query;
	}
	function tampil_info(){
		$query = $this->db->get('informasi');
		return $query;
	}
	function get_pass($id){
		$query = $this->db->get_where('psb' , $id);
		return $query;
	}
	function auto_inc(){
    	$this->db->select('Right(psb.no_reg,3) as kode ',false);
            $this->db->order_by('no_reg', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('psb');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $date=date('ym');
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "PSB".$date.$kodemax;
            return $kodejadi;

    }
}
?>