<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User'); //call model
     }
 
     public function index() {
        if($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        }
        else {
             redirect('SignUp/signup');
        }
     }
     
     public function signup(){
            $nama_user = $this->input->post('nama_user');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $role = $this->input->post('role');
            $data = array(
                'nama_user' => $nama_user,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role,
            );
            
            $nani = $this->input->post('username', TRUE);
            $checking = $this->User->check_duplicate('tbl_users', array('username' => $nani));

                //jika ditemukan, message
                if ($checking != FALSE) {
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i>DUPLIKAT</b> Username tersebut sudah terdaftar</div></div>';
                    $this->load->view('signup', $data);
                }else{
                    $this->User->signup($data);
                    redirect('login');
                    
                }
     
     }

     
}