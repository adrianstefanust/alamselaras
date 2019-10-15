<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentImage extends CI_Model {

	function getAll()
	{
		$this->db->select('*');
		$result = $this->db->get('page_image');
		if ($result->num_rows()>0) {
			return $result->result_array();
		} else {
			return false;
		}
		
	}

	function get($keyword)
	{
		$this->db->select('*');
		$this->db->where('page_name', $keyword);
		$result = $this->db->get('page_image');
		if ($result->num_rows()>0) {
			return $result->result_array();
		} else {
			return false;
		}
		
	}

	function edit($data, $id)
	{
		
		$this->db->where('page_image_id', $id);
		$result = $this->db->update('page_image', $data);
		if ($result->num_rows()>0) {
			return $result->result_array();
		} else {
			return false;
		}
		
	}

}

/* End of file ContentImage.php */
/* Location: ./application/models/ContentImage.php */