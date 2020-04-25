<?php

/**
 * 
 */
class PenyakitList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit');
	}


	public function index(){
		$data['judul'] = 'List Penyakit';

		$data['dataPenyakit'] = $this->Penyakit->get_data_penyakit();

		$this->load->view('templates/header', $data);
		$this->load->view('show_data/show_penyakit', $data);
		$this->load->view('templates/footer');
	}
}