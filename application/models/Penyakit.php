<?php

	class Penyakit extends CI_Model{
		
		public function get_data_penyakit(){
			$data = $this->db->get('tbl_penyakit');
			return $data->result_array();
		}

		public function get_penyakit_by_id($id){
			$this->db->where('id', $id);
			return $this->db->get('tbl_penyakit')->result();
		}

	}


?>