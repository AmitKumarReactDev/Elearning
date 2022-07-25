<?php 

class p_courseModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'pcourse_name' => $this->input->post('p_coursename'),
			'pcourse_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('particular_course',$data);
	}
	public function getList()
	{
		// $this->db->group_by('particular_course.pcourse_name','DISTINCT');			
		$result=$this->db->get('particular_course');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('pcourse_id',$id);
		$this->db->delete('particular_course');
	}
	public function activedeactive($id)
	{
		$this->db->where('pcourse_id',$id);
		$result=$this->db->get('particular_course');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_status' =>'Deactive'
		);
		$this->db->update('particular_course',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_status' =>'Active'
		);
		$this->db->update('particular_course',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('pcourse_id',$id);
		$result=$this->db->get('particular_course');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_name' => $this->input->post('p_coursename'),
			'pcourse_update_time'=>date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('particular_course',$data);	
	}
}
?>