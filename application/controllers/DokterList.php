<?php

/**
 * 
 */
class DokterList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Dokter');
	}


	public function index(){
		$data['judul'] = 'List Dokter';

		$data['dataDokter'] = $this->Dokter->get_data_dokter();

		$this->load->view('templates/header', $data);
		$this->load->view('show_data/show_dokter', $data);
		$this->load->view('templates/footer');
	}
}