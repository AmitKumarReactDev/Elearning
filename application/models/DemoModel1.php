<?php
	/**
	 * 
	 */
	class DemoModel extends CI_Model
	{
		public function getlist()
		{
			$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id');
			$this->db->where('faculty_cid',22);
			$data=$this->db->get('faculty_course');
			return $data->result_array();	
		}
	}
?>