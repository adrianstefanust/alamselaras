<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Admin extends CI_Controller{

	// method untuk menampilkan login page
	function login(){
	    if(!$this->session->userdata('logged_in_admin')){
	        $this->load->view('V_Login');
	    }
	    else{
	        redirect('/home');
	        
	    }
	}
	function prosesLogin(){
	        echo "test";
	        return ;
	}

	function home(){
		if(!$this->session->userdata('logged_in_admin')){
	        redirect('/');
	    }
	    else{
	        $this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('V_Home');
			$this->load->view('template/footer');  
	    }
	}

	function calendar(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('V_Calendar');
		$this->load->view('template/footer');
	}
}
?>