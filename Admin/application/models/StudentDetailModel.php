<?php 
/**
 * 
 */
class StudentDetailModel extends CI_Model
{
	public function getList()
	{
		$result = $this->db->get('student');
		return $result->result_array();
	}

	public function activestatus($id)
	{
		$this->db->where('student_id',$id);
		$data = array(
			'student_status' =>'Deactive'
		);
		$this->db->update('student',$data);	
	}

	public function deactivestatus($id)
	{
		$this->db->where('student_id',$id);
		$data = array(
			'student_status' =>'Active'
		);
		$this->db->update('student',$data);	
	}

	public function edit($id)
	{
		$this->db->where('student_id',$id);
		$result=$this->db->get('student');
		return $result->row_array();	
	}
	public function coureslist()
	{
		$this->db->join('particular_course','particular_course.pcourse_id=student_capply.pcourse_id');
		$this->db->join('student','student.student_id=student_capply.student_id');
		$result= $this->db->get('student_capply');
		return $result->result_array();
	}

}
 ?>