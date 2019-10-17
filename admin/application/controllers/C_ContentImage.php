<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ContentImage extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in_admin')) {
			$this->load->model('ContentImage');
			$data['tableContext'] = $this->ContentImage->getAll();
			// print_r( $this->ContentText->getAllData());
			// return;
			// $data = array( );
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('V_Content_Image', $data);
			$this->load->view('template/footer'); 
		}else{
			redirect('/');
		}
	}
	public function uploadImage($filename,$folder,$filenameext,$temp,$id)
	{
		if ($this->session->userdata('logged_in_admin')) {
			$config['upload_path'] = '../assets/images/'.$folder.'/';
			$config['file_name'] = $filename;
			$config['allowed_types'] = 'jpg|png';
			$config['max_width']  = 0;
			$config['max_height']  = 0;
			$config['max_size']  = 2560;
			$config['detect_mime']        	= 'TRUE';


			$path = $folder.'/'.$filenameext;
			$data = array(
				'page_image_path'=>$path,
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('page_image_path')){

				$this->session->set_flashdata('error', $this->upload->display_errors());
				return false;
			}
			else{
				$this->session->set_flashdata('success', 'Berhasil mengganti gambar');
				if (file_exists('assets/images/'.$temp[0]['page_image_path'])) {
					unlink('assets/images/'.$temp[0]['page_image_path']);
				}

				$res = $this->ContentImage->edit($data, $id);
				return $res;
			}
			
			
		}else{
			redirect('/');
		}
	}
	public function edit()
	{
		if ($this->session->userdata('logged_in_admin')) {

			$this->load->model('ContentImage');
			$this->load->helper("file");
			$id = $this->input->post('ID');
			$temp = $this->ContentImage->getByID($id);
			$new_name = 'LOGO_'.time().'';
			$ext  = (explode('.', $_FILES["page_image_path"]['name']));
			// print_r($temp);
			$this->uploadImage($new_name,'bg',$new_name.'.'.$ext[sizeof($ext)-1],$temp,$id);
			
			// return;
			redirect('/content-image','');
		}else{
			redirect('/');
		}
	}


	//Method untuk melakukan upload file ke server berdasarkan tipe file yang diupload
	private function uploadFile($id_input, $tipe_file, $destfile, $nama_field, $namatipe, $extension){
		$hash = $this->generateHash(8);
		$sNewFileName 				= $namatipe."_".uniqid()."_".$hash;
		$sNewFileName 				= str_replace(' ', '_', $sNewFileName);
		$sNewFileName 				= str_replace("'", '_', $sNewFileName);
		$config['file_name'] 			= $sNewFileName;
		$config['upload_path']          = $destfile;
		$config['allowed_types']        = $extension;
		$config['detect_mime']        	= 'TRUE';
		$config['max_size']             = 5120;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$name_file = $sNewFileName;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($nama_field)){
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$res = $this->insertDataFileDB($tipe_file, $id_input, $name_file.$this->upload->data('file_ext'));
			return $res;
		}
	}
}

/* End of file C_ContentImage.php */
/* Location: ./application/controllers/C_ContentImage.php */