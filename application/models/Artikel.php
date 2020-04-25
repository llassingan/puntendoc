<?php

	class Artikel extends CI_Model{
		
		public function get_data_artikel(){
			$data = $this->db->get('tbl_artikel');
			return $data->result_array();
		}

		public function get_artikel_by_id($id){
			$this->db->where('id', $id);
			return $this->db->get('tbl_artikel')->result();
		}

	}


?>