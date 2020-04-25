<?php

/**
 * 
 */
class ArtikelDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Artikel');
	}


	public function index($id){
		$artikel = $this->Artikel->get_artikel_by_id($id);
		$data['artikel'] = $artikel;


		$data['judul'] = $artikel[0]->judul;

		$this->load->view('templates/header', $data);
		$this->load->view('show_detail/detail_artikel', $data);
		$this->load->view('templates/footer');
	}
}