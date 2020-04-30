<?php
 // MUHAMMAD RIDHO SAPUTRA - 1301184402
class Pertanyaan extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("pertanyaan");
		$this->load->library("form_validation");
    }
    public function index()
	{

		$data['judul'] = 'Daftar Pertanyaan';
		$data['pertanyaan'] = $this->pertanyaan->getAllPertanyaan();
		$this->load->view('list_pertanyaan');
    }
    public function hapus($id)
	{
		$this->pertanyaan->hapusDataPertanyaan($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		$this->index();
    }
    public function simpan($id)
	{
		$this->pertanyaan->simpanDataPertanyaan($id);
		$this->index();
    }
    public function tambah()
	{
		$data['judul'] = 'Buat Pertanyaan';
		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');

		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('buat_pertanyaan');
		// else, when successed {
		} else {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
			$this->pertanyaan->tambahDataPertanyaan();
		//use flashdata to to show alert "added success"
			$this->session->set_flashdata('flash', 'Ditambahkan');
		//back to controller mahasiswa }
		}
	}
    
}