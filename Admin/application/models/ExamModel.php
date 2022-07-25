<?php
	
	class ExamModel extends CI_Model
	{
	
	public function getlist(){
			$this->db->where('subject_status','Active');
			$this->db->join('subject','subject.subject_id=exam_test.subject_id');
			$this->db->join('faculty','faculty.faculty_id=exam_test.faculty_id');
			$result=$this->db->get('exam_test');
			return $result->result_array();			
		}

	public function delete($id)
	{
		$this->db->where('exam_id',$id);
		$this->db->delete('exam_test');
	}
	
	public function activedeactive($id)
	{
		$this->db->where('exam_id',$id);
		$result=$this->db->get('exam_test');
		return $result;	
	}
	
	public function detail($id)
	{
		$this->db->where('exam_id',$id);
		$this->db->join('subject','subject.subject_id=exam_test.subject_id');
		$this->db->join('faculty','faculty.faculty_id=exam_test.faculty_id');
		$result=$this->db->get('exam_test');
		return $result->row_array();
	}
	
	public function activestatus($id)
	{
		$this->db->where('exam_id',$id);
		$data = array(
			'question_status' =>'Deactive'
		);
		$this->db->update('exam_test',$data);	
	}
	
	public function deactivestatus($id)
	{
		$this->db->where('exam_id',$id);
		$data = array(
			'question_status' =>'Active'
		);
		$this->db->update('exam_test',$data);	
	}
	
	public function edit($id)
	{
		$this->db->where('exam_id',$id);
		$result=$this->db->get('exam_test');
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