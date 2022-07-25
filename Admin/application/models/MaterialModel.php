<?php 

	class MaterialModel extends CI_Model
	{
		public function getlist()
		{
			$this->db->join('semester','material.semester_id=semester.semester_id');
			$this->db->join('stream','material.stream_id=stream.stream_id');
			$this->db->join('subject','material.subject_id=subject.subject_id');
			$result=$this->db->get('material');
			return $result->result_array();
		}
	

	public function activedeactive($id)
	{
		$this->db->where('area_id',$id);
		$result=$this->db->get('area');
		return $result;	
	}
	public function detail($id)
	{
		$this->db->where('material_id',$id);
		// $this->db->join('city','area.city_id=city.city_id','left');
		$this->db->join('semester','material.semester_id=semester.semester_id');
		$this->db->join('faculty','material.faculty_id=faculty.faculty_id');
		$this->db->join('stream','material.stream_id=stream.stream_id');
		$this->db->join('subject','material.subject_id=subject.subject_id');
		$result=$this->db->get('material');
		return $result->row_array();
	}
	public function activestatus($id)
	{
		$this->db->where('material_id',$id);
		$data = array(
			'material_status' =>'Deactive'
		);
		$this->db->update('material',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('material_id',$id);
		$data = array(
			'material_status' =>'Active'
		);
		$this->db->update('material',$data);	
	}

	 public function edit($id)
	{
		$this->db->where('material_id',$id);
		$result=$this->db->get('material');
		return $result->row_array();	
	}

	public function NoOfData()
	{
		$result=$this->db->get('material');
		return $result;
	}
	public function getallsem($id)
	{
		echo "hello";
		die();
		$this->db->where('stream_id',$id);
		$result = $this->db->get('semester');
		return $result->result_array();
	}
}
?>