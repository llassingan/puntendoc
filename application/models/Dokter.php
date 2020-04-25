<?php

	class Dokter extends CI_Model{
		
		public function get_data_dokter(){
			$data = $this->db->get('tbl_dokter');
			return $data->result_array();
		}

		public function get_dokter_by_id($id){
			$this->db->where('id', $id);
			return $this->db->get('tbl_dokter')->result();
		}

	}


?>