<?php
	
class ExamCourseModel extends CI_Model
	{
		public function getlist()
		{
			// $this->db->group_by('particular_course.pcourse_name','DISTINCT');
			$this->db->group_by('particular_course.pcourse_name','DISTINCT');						
			$this->db->where('question_status','Active');
			$this->db->join('particular_course','particular_course.pcourse_id=exam_ctest.pcourse_id');
			$result=$this->db->get('exam_ctest');
			return $result->result_array();
		}
		public function coursewise($id)
		{
			$this->db->where('question_status','Active');
			$this->db->where('exam_ctest.pcourse_id',$id);
			$this->db->join('particular_course','exam_ctest.pcourse_id=particular_course.pcourse_id');
			$result=$this->db->get('exam_ctest');
			return $result->result_array();
		}

		// public function facultylist()
		// {
		// 	// $this->db->
		// 	// $this->db->get('faculty');
		// 	$this->db->group_by('particular_course.pcourse_name','DISTINCT');			
		// 	$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id');
		// 	$this->db->join('faculty','faculty.faculty_id=faculty_course.faculty_id');
		// 	$result=$this->db->get('faculty_course');
		// 	return $result->result_array();
		// }

		// public function list()
		// {
		// 	$data=$this->db->get('faculty');
		// 	return $data->result_array(); 
		// }

		// public function pcourseget($id)
		// {
		// 	$this->db->where('particular_course.pcourse_id',$id);
		// 	$this->db->join('faculty_course','faculty_course.pcourse_id=particular_course.pcourse_id');
		// 	$this->db->join('faculty','faculty_course.faculty_id=faculty.faculty_id');
		// 	$result=$this->db->get('particular_course');
		// 	return $result->result_array();
		// }
		
	}
?>	