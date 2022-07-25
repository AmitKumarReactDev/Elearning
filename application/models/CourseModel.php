<?php 
class CourseModel extends CI_Model
{
	public function getsubject()
	{
		$this->db->join('stream','stream.stream_id=subject.stream_id');
		$this->db->join('semester','semester.semester_id=subject.semester_id');
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

	public function courseview($id)
	{
		$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id');
		$result = $this->db->get('faculty_course');
		return $result->result_array();
	}
	public function getstream()
	{
		$result = $this->db->get('stream');
		return $result->result_array();
	}

	public function getsemester($id)
	{
		// $this->db->where('stream_id',$id);
		// $result = $this->db->get('semester');
		// return $result->result_array();
	  $this->db->where('stream_id', $id);
	  $this->db->order_by('stream_id', 'ASC');
	  $query = $this->db->get('semester');
	  $output = '<option value="">Select Semester</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->semester_id.'">'.$row->semester_name.'</option>';
	  }
	  return $output;
	}

	public function getsubjectlist($id)
	{
		  $this->db->where('semester_id', $id);
		  // $this->db->order_by('sub_name', 'ASC');
		  $query = $this->db->get('subject');
		  $output = '<option value="">Select City</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->subject_id.'">'.$row->subject_name.'</option>';
		  }
		  return $output;
 	}	
	
	function fetch_country()
	{
	  $this->db->order_by("country_name", "ASC");
	  $query = $this->db->get("country");
	  return $query->result();
	}

	function fetch_state($country_id)
	{
	  $this->db->where('country_id', $country_id);
	  $this->db->order_by('state_name', 'ASC');
	  $query = $this->db->get('state');
	  $output = '<option value="">Select State</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
	  }
	  return $output;
	}

	function fetch_city($state_id)
    {
	  $this->db->where('state_id', $state_id);
	  $this->db->order_by('city_name', 'ASC');
	  $query = $this->db->get('city');
	  $output = '<option value="">Select City</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
	  }
	  return $output;
 	}
 	public function AppliedCoures($id)
 	{
 		$data = array(
 			'student_id' => $this->session->userdata('studentid'), 
 			'pcourse_id' => $id, 
 	);
 		$this->db->insert('student_capply',$data);
 	}
 	public function studentapplycoures()
 	{
 		$this->db->where('student_id',$this->session->userdata('studentid'));
 		$result=$this->db->get('student_capply');
 		return $result->result_array();
 	}
 	public function faculty_course($id)
 	{
 		$this->db->where('pcourse_id',$id);
 		$result=$this->db->get('faculty_course');
 		return $result->result_array();
 	}
 	public function couresmaterial($id)
 	{
 		$this->db->where('pcourse_id',$id);
 		$result=$this->db->get('course_material');
 		return $result->result_array();
 	}
}
 ?>