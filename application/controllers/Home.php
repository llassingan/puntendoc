<?php

/**
 * 
 */
class Home extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Obat');
		$this->load->model('Penyakit');
		$this->load->model('Artikel');
		$this->load->model('admin');
        
		//$this->load->model('Dokter');
	}


	public function index(){
		$data['judul'] = 'Puntendoc';

		$data['dataObat'] = $this->Obat->get_data_obat();
		$data['dataPenyakit'] = $this->Penyakit->get_data_penyakit();
		$data['dataArtikel'] = $this->Artikel->get_data_artikel();
		//$data['dataDokter'] = $this->Dokter->get_data_dokter();
		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}