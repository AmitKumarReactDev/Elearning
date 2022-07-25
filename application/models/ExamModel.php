<?php
	
	class ExamModel extends CI_Model
	{
		public function getlist()
		{
			$this->db->join('stream','stream.stream_id=subject.stream_id');
			$this->db->join('semester','semester.semester_id=subject.semester_id');
			// $this->db->where('subject.semester_id','semester.semester_id');
			$result=$this->db->get('subject');
			return $result->result_array();
		}
		public function subjectwise($id)
		{
			$this->db->where('question_status','Active');
			$this->db->where('exam_test.subject_id',$id);
			$this->db->join('subject','exam_test.subject_id=subject.subject_id');
			$result=$this->db->get('exam_test');
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