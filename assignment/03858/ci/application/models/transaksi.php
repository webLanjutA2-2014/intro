<?php
class Transaksi extends CI_Model{
	public function simpan($data){
		if($this->db->insert('transaksi', $data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function daftar(){
		$query = $this->db->get('transaksi');
		if ($query->num_rows() > 0) {
			# code...
			return $query->result_array();
		}else{
			return FALSE;
		}
	}	
}