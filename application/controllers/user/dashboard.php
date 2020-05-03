<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('Mangga');
        //cek session dan level user
        if($this->admin->is_role() != "user"){
            if($this->admin->is_role() == "admin"){
                redirect("index.php/admin/dashboard");
            }else{
                redirect("login");
            }
        }
    }

    public function index()
    {

        $this->load->view("user/dashboard");            

    }

    public function pertanyaan()
    {
        $data_tanya = $this->Mangga->Gettanya();
        $this->load->view("user/tanyadok",['data'=>$data_tanya]);            

    }
    public function tambahtanya()
    {
        $username = $this->input->post('username');
        $pertanyaan = $this->input->post('pertanyaan');
        $kategori = $this->input->post('kategori');
        $data = array(
            'username' => $username,
            'pertanyaan' => $pertanyaan,
            'kategori' => $kategori,
        );
        $this->Mangga->tambahtanya($data);
 
        redirect('/user/dashboard/pertanyaan');	
 
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}