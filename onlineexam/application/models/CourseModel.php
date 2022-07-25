<?php 
class CourseModel extends CI_Model
{
	public function getsubject()
	{
		$this->db->join('stream','stream.stream_id=subject.stream_id');
		$this->db->join('semester','semester.semester_id=subject.semester_id');
		// $this->db->where('subject.semester_id','semester.semester_id');
		$result=$this->db->get('subject');
		return $result->result_array();		
	}
	public function getList()
	{
		$this->db->where('faculty_cstatus','Active');
		$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id');
		$result=$this->db->get('faculty_course');
		return $result->result_array();
	}
	public function course_single($id)
	{
		$this->db->join('faculty','faculty.faculty_id=faculty_course.faculty_id');
		$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id');
		$this->db->where('faculty_course.pcourse_id',$id);
		$result=$this->db->get('faculty_course');
		return $result->row_array();
	}
}
 ?>