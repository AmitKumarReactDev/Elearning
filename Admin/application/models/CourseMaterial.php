<?php 
class faculty_courseModel extends CI_Model
{
	public function getList()
	{
		$this->db->join('faculty','faculty_course.faculty_id=faculty.faculty_id','left');
		$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id','left');
		$result=$this->db->get('faculty_course');
		return $result->result_array();
	}
	public function NoOfData()
	{
		$result=$this->db->get('faculty_course');
		return $result;
	}
	public function activedeactive($id)
	{
		$this->db->where('faculty_cid',$id);
		$result=$this->db->get('faculty_course');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('faculty_cid',$id);
		$data = array(
			'faculty_cstatus' =>'Deactive'
		);
		$this->db->update('faculty_course',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('faculty_cid',$id);
		$data = array(
			'faculty_cstatus' =>'Active'
					);
		$this->db->update('faculty_course',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('faculty_cid',$id);
		$result=$this->db->get('faculty_course');
		return $result->row_array();	
	}
	public function detail($id)
	{
		$this->db->where('faculty_course.faculty_cid',$id);
		$this->db->join('faculty','faculty_course.faculty_id=faculty.faculty_id','left');
		$this->db->join('particular_course','particular_course.pcourse_id=faculty_course.pcourse_id','left');
		$result=$this->db->get('faculty_course');
		return $result->row_array();
	}

	public function materiallist()
	{
		$this->db->join('particular_course','particular_course.pcourse_id=course_material.pcourse_id');
		$this->db->join('faculty','faculty.faculty_id=course_material.faculty_id');
		// $this->db->join();
		$result=$this->db->get('course_material');
		return $result->result_array();
	}
}
?>