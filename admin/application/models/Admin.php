<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Model{

	//function untuk menghapus administrator
	function removeAdmin($id_admin){
		$this->db->where('id', $id_admin);
   	 	$res = $this->db->delete('admin');  
   	 	if($res){
   	 		return true;
   	 	}
   	 	else{
   	 		return false;
   	 	}
	}
	//function untuk verify password
	function getPassword($email){
		$this->db->select('*');
		$this->db->where('EMAIL', $email);
		$this->db->from('admin');
		$res = $this->db->get();
		if ($res->num_rows()>0) {
			return $res->result_array();
		}else{
			return false;
		}
	}

	//function untuk menambahkan admin baru
	function addAdmin($data){
		
		$result = $this->db->insert('admin', $data);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	//function untuk check username admin dan ambil data admin dari database
	function checkAdmin($email){
		$this->db->select('id,nama, email, fakultas');
		$this->db->where('email', $email);
		$this->db->from('admin');
		$result = $this->db->get();
		if($result->num_rows() == 1){
			return $result->result_array();
		} 
		else {
			return false;
		}
	}
	
}
?>