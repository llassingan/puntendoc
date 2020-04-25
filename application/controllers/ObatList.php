<?php

/**
 * 
 */
class ObatList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Obat');
	}


	public function index(){
		$data['judul'] = 'List Obat';

		$data['dataObat'] = $this->Obat->get_data_obat();

		$this->load->view('templates/header', $data);
		$this->load->view('show_data/show_obat', $data);
		$this->load->view('templates/footer');
	}
}