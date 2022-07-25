<?php 
class CourseMaterialModel extends CI_Model
{
	public function getList()
	{
		$this->db->join('faculty','course_material.faculty_id=faculty.faculty_id');
		$this->db->join('particular_course','particular_course.pcourse_id=course_material.pcourse_id');
		$result=$this->db->get('course_material');
		return $result->result_array();
	}
	public function NoOfData()
	{
		$result=$this->db->get('faculty_course');
		return $result;
	}
	public function activedeactive($id)
	{
		$this->db->where('material_cid',$id);
		$result=$this->db->get('course_material');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('material_cid',$id);
		$data = array(
			'material_status' =>'Deactive'
		);
		$this->db->update('course_material',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('material_cid',$id);
		$data = array(
			'material_status' =>'Active'
					);
		$this->db->update('course_material',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('material_cid',$id);
		$result=$this->db->get('course_material');
		return $result->row_array();	
	}
	public function detail($id)
	{
		$this->db->where('course_material.material_cid',$id);
		$this->db->join('faculty','course_material.faculty_id=faculty.faculty_id');
		$this->db->join('particular_course','particular_course.pcourse_id=course_material.pcourse_id');
		$result=$this->db->get('course_material');
		return $result->row_array();
	}
}
?>