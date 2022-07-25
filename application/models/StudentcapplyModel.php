<?php
	/**
	 * 
	 */
	class StudentcapplyModel extends CI_Model
	{
		public function add($id)
		{
			$data = array(
				'pcourse_id' => $id, 
			);
			$this->db->insert('student_capply',$data);
		}
		public function applycoureslist()
		{

			$this->db->where('student_id',$this->session->userdata('studentid'));
			$this->db->join('particular_course','particular_course.pcourse_id=student_capply.pcourse_id');
			$result = $this->db->get('student_capply');
			return $result->result_array();
		}
	}
?>