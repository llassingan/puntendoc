<?php

/**
 * 
 */
class ArtikelList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Artikel');
		$this->load->model('admin');
	}


	public function index(){
		$data['judul'] = 'List Artikel';

		$data['dataArtikel'] = $this->Artikel->get_data_artikel();

		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		$this->load->view('show_data/show_artikel', $data);
		$this->load->view('templates/footer');
	}
}