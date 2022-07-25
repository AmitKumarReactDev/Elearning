<?php 
/**
 * 
 */
class StreamModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'stream_name' => $this->input->post('streamname'),
			'stream_description' => $this->input->post('streamDescription'),
			'stream_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('stream',$data);
	}
	public function NoOfData()
	{
		$result=$this->db->get('stream');
		return $result;
	}

	public function getList()
	{
		$result=$this->db->get('stream');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('stream_id',$id);
		$this->db->delete('stream');
	}
	public function activedeactive($id)
	{
		$this->db->where('stream_id',$id);
		$result=$this->db->get('stream');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('stream_id',$id);
		$data = array(
			'stream_status' =>'Deactive'
		);
		$this->db->update('stream',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('stream_id',$id);
		$data = array(
			'stream_status' =>'Active'
		);
		$this->db->update('stream',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('stream_id',$id);
		$result=$this->db->get('stream');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('stream_id',$id);
		$data = array(
			'stream_name' => $this->input->post('streamname'),
			'stream_description' => $this->input->post('streamDescription'),
			'stream_update_time'=> date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('stream',$data);	
	}
	public function detail($id)
	{
		$this->db->where('stream_id',$id);
		$result=$this->db->get('stream');
		return $result->row_array();		
	}
}
?>