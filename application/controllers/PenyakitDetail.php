<?php

/**
 * 
 */
class PenyakitDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit');
	}


	public function index($id){
		$penyakit = $this->Penyakit->get_penyakit_by_id($id);
		$data['penyakit'] = $penyakit;


		$data['judul'] = $penyakit[0]->nama;

		$this->load->view('templates/header', $data);
		$this->load->view('show_detail/detail_penyakit', $data);
		$this->load->view('templates/footer');
	}
}