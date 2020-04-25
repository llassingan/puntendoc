<?php

/**
 * 
 */
class ObatDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Obat');
	}


	public function index($id){
		$obat = $this->Obat->get_obat_by_id($id);
		$data['obat'] = $obat;


		$data['judul'] = $obat[0]->nama;

		$this->load->view('templates/header', $data);
		$this->load->view('show_detail/detail_obat', $data);
		$this->load->view('templates/footer');
	}
}