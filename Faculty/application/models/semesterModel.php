<?php 
/**
 * 
 */
class semesterModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'semester_name' => $this->input->post('semestername'),
			'stream_id' => $this->input->post('streamname'),
			'semester_entry_time' => date('Y-m-d h:i:s') 
		);
		$this->db->insert('semester',$data);
	}
	public function getList()
	{
		$this->db->join('stream','stream.stream_id=semester.stream_id','left');
		$result=$this->db->get('semester');
		return $result->result_array();
		}
	public function delete($id)
	{
		$this->db->where('semester_id',$id);
		$this->db->delete('semester');
	}
	public function activedeactive($id)
	{
		$this->db->where('semester_id',$id);
		$result=$this->db->get('semester');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('semester_id',$id);
		$data = array(
			'semester_status' =>'Deactive'
		);
		$this->db->update('semester',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('semester_id',$id);
		$data = array(
			'semester_status' =>'Active'
		);
		$this->db->update('semester',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('semester_id',$id);
		$result=$this->db->get('semester');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('semester_id',$id);
		$data = array(
			'semester_name' => $this->input->post('semestername'),
			'stream_id' => $this->input->post('streamname'),
			'area_update_time'=>date('Y-m-d h:i:s') 
		);
	$result=$this->db->update('semester',$data);	
	}
}
?>