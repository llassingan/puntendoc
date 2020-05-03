<?php

/**
 * 
 */
class ObatList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Obat');
		$this->load->model('admin');
	}


	public function index(){
		$data['judul'] = 'List Obat';

		$data['dataObat'] = $this->Obat->get_data_obat();

		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		$this->load->view('show_data/show_obat', $data);
		$this->load->view('templates/footer');
	}
}