<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContentText extends CI_Model{

	//function untuk verify password
	function getAllData(){
		$this->db->select('*');
		// $this->db->where('page_name', $page);
		$this->db->from('page_content');
		$res = $this->db->get();
		if ($res->num_rows()>0) {
			return $res->result_array();
		}else{
			return false;
		}
	}

	//function untuk menambahkan admin baru
	function updateContent($page_content_id, $page_text){
		$data = array(
			'page_text' => $page_text
		);
		$this->db->where('page_content_id', $page_content_id);
		$res = $this->db->update('page_content', $data);
		if($res){
			return true;
		}
		else{
			return false;
		}
	}
	
}
?>