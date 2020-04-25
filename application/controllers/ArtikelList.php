<?php

/**
 * 
 */
class ArtikelList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Artikel');
	}


	public function index(){
		$data['judul'] = 'List Artikel';

		$data['dataArtikel'] = $this->Artikel->get_data_artikel();

		$this->load->view('templates/header', $data);
		$this->load->view('show_data/show_artikel', $data);
		$this->load->view('templates/footer');
	}
}