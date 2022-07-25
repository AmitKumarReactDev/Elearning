<?php 
/**
 * 
 */
class StateModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'state_name' => $this->input->post('statename'),
			'state_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('state',$data);
	}
	public function getList()
	{
		$result=$this->db->get('state');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('state_id',$id);
		$this->db->delete('state');
	}
	public function activedeactive($id)
	{
		$this->db->where('state_id',$id);
		$result=$this->db->get('state');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('state_id',$id);
		$data = array(
			'state_status' =>'Deactive'
		);
		$this->db->update('state',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('state_id',$id);
		$data = array(
			'state_status' =>'Active'
		);
		$this->db->update('state',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('state_id',$id);
		$result=$this->db->get('state');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('state_id',$id);
		$data = array(
			'state_name' => $this->input->post('statename'),
			'state_update_time'=>date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('state',$data);	
	}
}
?>