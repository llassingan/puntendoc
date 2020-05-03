<?php

/**
 * 
 */
class PenyakitDetail extends CI_Controller{
	

	//constructor
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit');
		$this->load->model('admin');
	}


	public function index($id){
		$penyakit = $this->Penyakit->get_penyakit_by_id($id);
		$data['penyakit'] = $penyakit;


		$data['judul'] = $penyakit[0]->nama;

		if($this->admin->is_role() == "admin"){
            $this->load->view('templates/headadmin', $data);
        }else if ($this->admin->is_role() == "user"){
			$this->load->view('templates/headuser', $data);
		}else{
			$this->load->view('templates/header', $data);
		}
		$this->load->view('show_detail/detail_penyakit', $data);
		$this->load->view('templates/footer');
	}
}