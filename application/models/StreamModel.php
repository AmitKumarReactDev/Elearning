<?php 

class StreamModel extends CI_Model
{
	public function getallsem($id)
	{
		$this->db->where('stream_id',$id);
		$result = $this->db->get('semester');
		return $result->result_array();
	}
	public function getallsubject($id)
	{
		$this->db->where('semester_id',$id);
		$result = $this->db->get('subject');
		return $result->result_array();
	}
	public function getmaterial()
	{
		$this->db->where('subject_id',$this->input->post('subjectId'));
		$result = $this->db->get('material');
		return $result->result_array();
	}

	public function demoinput()
	{
		$data = array(
			'stream_name' => $this->input->post('name'),
			'stream_description' => $this->input->post('desc'),
			'stream_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('stream',$data);
	}
}
 ?>