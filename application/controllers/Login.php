<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function _construct() {
        session_start();
    }

    public function index(){
        $cek = $this->session->userdata('fk_status');
        
        if(empty($cek)){
            $this->load->view('frontend/login');
        }else{
            $status = $this->session->userdata('fk_status');
            if($status == '1'){
                header('location: '.base_url().'dashboard');
            }elseif($status == '2'){
                header('location: '.base_url().'dashboard2');
            }elseif($status == '3'){
                header('location: '.base_url().'dashboard3');
            }else{
                header('location: '.base_url().'dashboard4');
            }
        }
    }
    
    public function logout(){
        $cek = $this->session->userdata('username');
        if(empty($cek)){
            header('location:'.  base_url());
        }else{
            $this->session->sess_destroy();
            header('location:'.  base_url());
        }
    }
}
