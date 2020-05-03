<?php

/**
 * 
 */
class ObatDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Obat');
		$this->load->model('admin');
	}


	public function index($id){
		$obat = $this->Obat->get_obat_by_id($id);
		$data['obat'] = $obat;


		$data['judul'] = $obat[0]->nama;

		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		$this->load->view('show_detail/detail_obat', $data);
		$this->load->view('templates/footer');
	}
}