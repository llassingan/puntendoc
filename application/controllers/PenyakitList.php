<?php

/**
 * 
 */
class PenyakitList extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit');
		$this->load->model('admin');
	}


	public function index(){
		$data['judul'] = 'List Penyakit';

		$data['dataPenyakit'] = $this->Penyakit->get_data_penyakit();

		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		$this->load->view('show_data/show_penyakit', $data);
		$this->load->view('templates/footer');
	}
}