<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mangga extends CI_Model {

	public function Getobat(){
		return $this->db->get('tbl_obat')->result();
    }
    public function Getpenyakit(){
		return $this->db->get('tbl_penyakit')->result();
    }
    public function Getartikel(){
		return $this->db->get('tbl_artikel')->result();
	}
	public function Gettanya(){
		return $this->db->get('tbl_pertanyaan')->result();
	}

	public function delobat($id)
	{
		$this->db->delete('tbl_obat', array('id' => $id));
	    return;
	}
	public function deltanya($id)
	{
		$this->db->delete('tbl_pertanyaan', array('id' => $id));
	    return;
    }

    public function delsakit($id)
	{
		$this->db->delete('tbl_penyakit', array('id' => $id));
	    return;
    }
    public function delartikel($id)
	{
		$this->db->delete('tbl_artikel', array('id' => $id));
	    return;
	}

	public function editobat($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_obat', $data);
	    return;
    }
    
	public function editsakit($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_penyakit', $data);
	    return;
    }

    public function editartikel($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_artikel', $data);
	    return;
	}
    
    public function tambahobat($data)
	{
		$this->db->insert('tbl_obat',$data);
	    return;
    }
    
    public function tambahsakit($data)
	{
		$this->db->insert('tbl_penyakit',$data);
	    return;
	}

	public function tambahtanya($data)
	{
		$this->db->insert('tbl_pertanyaan',$data);
	    return;
	}


	public function tambahartikel($data)
	{
		$this->db->insert('tbl_artikel',$data);
	    return;
	}
}
