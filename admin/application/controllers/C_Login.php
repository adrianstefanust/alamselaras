<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Login extends CI_Controller{
	
	function loadLoginPage(){
		if(!$this->session->userdata('logged_in_admin')){
			$this->load->view('pages_user/V_Login');
		}
		else{
			redirect('/');
		}
	}

	function prosesLogin(){
		if(!$this->session->userdata('logged_in_admin')){
			
			$email = $this->input->post('email');
			$password =  $this->input->post('password');

			$this->load->model('Admin');
			$data_login = $this->Admin->getPassword($email);
			$is_verified = password_verify($password, $data_login[0]['PASSWORD'] );
			
			if( $is_verified){
				foreach ($data_login as $data) {
					$nama_admin= $data['NAMA'];
					$email_admin = $data['EMAIL'];
					$id_admin = $data['ID'];
				}
				$userdata = array(
					'logged_in_admin' => true,
					'id_admin' => $id_admin,
					'nama_admin' => $nama_admin,
					'email_admin' => $email_admin
				);

				$this->session->set_userdata($userdata);

				redirect('/home');
			}else{
				$this->session->set_flashdata('error', 'password/email anda tidak terdaftar');
				redirect('/','refresh');
			}
		}
		else{
			redirect('/');
		}
	}
	function logout(){
		if($this->session->userdata('logged_in_admin')){
			$this->session->unset_userdata('logged_in_admin');
			$this->session->unset_userdata('id_admin');
			$this->session->unset_userdata('nama_admin');
			$this->session->unset_userdata('email_admin');
			redirect('/','refresh');
		}
		else{
			redirect('/');
		}
	}
}
?>