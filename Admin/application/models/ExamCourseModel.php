<?php
	
	class ExamCourseModel extends CI_Model
	{
	
	public function getlist(){
			$this->db->where('pcourse_status','Active');
			$this->db->join('particular_course','particular_course.pcourse_id=exam_ctest.pcourse_id');
			$this->db->join('faculty','faculty.faculty_id=exam_ctest.faculty_id');
			$result=$this->db->get('exam_ctest');
			return $result->result_array();			
		}

	public function delete($id)
	{
		$this->db->where('exam_id',$id);
		$this->db->delete('exam_ctest');
	}
	
	public function activedeactive($id)
	{
		$this->db->where('exam_id',$id);
		$result=$this->db->get('exam_ctest');
		return $result;	
	}
	
	public function detail($id)
	{
		$this->db->where('exam_id',$id);
		$this->db->join('particular_course','particular_course.pcourse_id=exam_ctest.pcourse_id');
		$this->db->join('faculty','faculty.faculty_id=exam_ctest.faculty_id');
		$result=$this->db->get('exam_ctest');
		return $result->row_array();
	}
	
	public function activestatus($id)
	{
		$this->db->where('exam_id',$id);
		$data = array(
			'question_status' =>'Deactive'
		);
		$this->db->update('exam_ctest',$data);	
	}
	
	public function deactivestatus($id)
	{
		$this->db->where('exam_id',$id);
		$data = array(
			'question_status' =>'Active'
		);
		$this->db->update('exam_ctest',$data);	
	}
	
	public function edit($id)
	{
		$this->db->where('exam_id',$id);
		$result=$this->db->get('exam_ctest');
		return $result->row_array();	
	}
	// public function update($id)
	// {
	
	// 	$this->db->where('exam_id',$id);
	// 	$data = array(
	// 		'area_name' => $this->input->post('areaname'),
	// 		'city_id' => $this->input->post('cityname'),
	// 		'area_update_time'=>date('Y-m-d h:i:s') 
	// 	);
	// 	$this->db->update('area',$data);	
	// }
	}

?>