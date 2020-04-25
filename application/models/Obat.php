<?php

	class Obat extends CI_Model{
		
		public function get_data_obat(){
			$data = $this->db->get('tbl_obat');
			return $data->result_array();
		}

		public function get_obat_by_id($id){
			$this->db->where('id', $id);
			return $this->db->get('tbl_obat')->result();
		}

	}


?>