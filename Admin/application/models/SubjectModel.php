<?php 
/**
 * 
 */
class SubjectModel extends CI_Model
{
	public function detail($id)
	{
		$this->db->where('subject.subject_id',$id);
		$this->db->join('stream','stream.stream_id=subject.stream_id','left');
		$this->db->join('semester','semester.semester_id=subject.semester_id','left');
		$result=$this->db->get('subject');
		return $result->row_array();
	}

	public function add()
	{
		$data = array(
			'semester_id' => $this->input->post('semestername'),
			'stream_id' => $this->input->post('streamname'),
			'subject_name' => $this->input->post('subjectname'),
			'subject_entry_time' => date('Y-m-d h:i:s') 
		);
		$this->db->insert('subject',$data);
	}
	public function getList()
	{
		$this->db->join('semester','semester.semester_id=subject.semester_id','left');
		$this->db->join('stream','stream.stream_id=subject.stream_id','left');
		$result=$this->db->get('subject');
		return $result->result_array();
	}
	public function NoOfData()
	{
		$result=$this->db->get('subject');
		return $result;
	}
	public function delete($id)
	{
		$this->db->where('subject_id',$id);
		$this->db->delete('subject');
	}
	public function activedeactive($id)
	{
		$this->db->where('subject_id',$id);
		$result=$this->db->get('subject');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('subject_id',$id);
		$data = array(
			'subject_status' =>'Deactive'
		);
		$this->db->update('subject',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('subject_id',$id);
		$data = array(
			'subject_status' =>'Active'
		);
		$this->db->update('subject',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('subject_id',$id);
		$result=$this->db->get('subject');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('subject_id',$id);
		$data = array(
			'subject_name' => $this->input->post('subjectname'),
			'stream_id' => $this->input->post('streamname'),
			'semester_id' => $this->input->post('semestername'),
			'subject_update_time'=>date('Y-m-d h:i:s') 
		);
	$result=$this->db->update('subject',$data);	
	}
}
?>