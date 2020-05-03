<?php
class Mahasiswa_model extends CI_model
{
    public function getAllPertanyaan()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('pertanyaan')->result_array();
    }
    
    public function tambahDataPertanyaan()
	{
		$data = [
			"email" => $this->input->post('email', true),
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"status" => $this->input->post('status', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('pertanyaan',$data);
    }
    
    public function simpanDataPertanyaan($id)
	{
		$data = [
			"email" => $this->input->post('email', true),
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"status" => $this->input->post('status', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id',$id);
		$this->db->update('pertanyaan',$data);
    }

    public function hapusDataPertanyaan($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id',$id);
		$this->db->delete('pertanyaan');
	}
}