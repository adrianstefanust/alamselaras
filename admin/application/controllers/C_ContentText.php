<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_ContentText extends CI_Controller{
	function loadTable(){
		if ($this->session->userdata('logged_in_admin')) {
			# code...
			$this->load->model('ContentText');
			$data['tableContext'] = $this->ContentText->getAllData();
			// print_r( $this->ContentText->getAllData());
			// return;
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('V_Content', $data);
			$this->load->view('template/footer'); 
			// $data['tableContext'] = $this->Data_input->getData();
		}else{
			redirect('/','refresh');
		}
	}

	function editContent(){
		if ($this->session->userdata('logged_in_admin')) {
			# code...
			$content_text = $this->input->post('text');
			$id = $this->input->post('ID');
			$this->load->model('ContentText');
			$res = $this->ContentText->updateContent($id, $content_text);
			if($res){
				$this->session->set_flashdata('info_success', 'Berhasil mengubah konten');
				redirect('/content-text');
			}
			else if(!$res){
				$this->session->set_flashdata('info_failed', 'Gagal update database konten');
				redirect('/content-text');
			}
		}else{
			redirect('/','refresh');
		}
	}
}
?>