<?php 
class student_classModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'student_name' => $this->input->post('student_name'),
			'student_class_entry_time'=>date('Y-m-d h:i:s') 
		);
		$this->db->insert('student_class',$data);
	}

	public function NoOfData()
	{
		$result=$this->db->get('student_class');
		return $result;
	}
	
	public function detail($id)
	{
		$this->db->where('student_class.student_class_id',$id);
		$this->db->join('student','student.student_id=student_class.student_id');
		$this->db->join('stream','student_class.stream_id=stream.stream_id','left');
		$this->db->join('semester','student_class.semester_id=semester.semester_id','left');
		$result=$this->db->get('student_class');
		return $result->row_array();
	}

	public function getList()
	{
		$this->db->group_by('semester.semester_name','DISTINCT');			
		$this->db->join('stream','student_class.stream_id=stream.stream_id','left');
		$this->db->join('student','student_class.student_id=student.student_id','left');	
		$this->db->join('semester','student_class.semester_id=semester.semester_id','left');	
		$result=$this->db->get('student_class');
		return $result->result_array();
	}

	public function delete($id)
	{
		$this->db->where('student_class_id',$id);
		$this->db->delete('student_class');
	}

	public function activedeactive($id)
	{
		$this->db->where('student_class_id',$id);
		$result=$this->db->get('student_class');
		return $result;	
	}

	public function activestatus($id)
	{
		$this->db->where('student_class_id',$id);
		$data = array(
			'student_class_status' =>'Deactive'
		);
		$this->db->update('student_class',$data);	
	}

	public function deactivestatus($id)
	{
		$this->db->where('student_class_id',$id);
		$data = array(
			'student_class_status' =>'Active'
		);
		$this->db->update('student_class',$data);	
	}

	public function edit($id)
	{
		$this->db->where('student_class_id',$id);
		$result=$this->db->get('student_class');
		return $result->row_array();	
	}

	public function update($id)
	{
		$this->db->where('student_class_id',$id);
		$data = array(
			'student_id' => $this->input->post('studentname'),
			'student_class_update_time'=>date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('student_class',$data);	
	}
	
}
?>