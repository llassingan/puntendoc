<?php

/**
 * 
 */
class DokterDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Dokter');
	}


	public function index($id){
		$dokter = $this->Dokter->get_dokter_by_id($id);
		$data['dokter'] = $dokter;


		$data['judul'] = $dokter[0]->nama;

		$this->load->view('templates/header', $data);
		$this->load->view('show_detail/detail_dokter', $data);
		$this->load->view('templates/footer');
	}
}