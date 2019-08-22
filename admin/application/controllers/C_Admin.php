<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Admin extends CI_Controller{

// method untuk menampilkan login page
function login(){
    if(!$this->session->userdata('logged_in_admin')){
        $this->load->view('V_Login');
    }
    else{
        redirect('/data');
        
    }
}
function prosesLogin(){
        echo "test";
        return ;
}
}
?>