<?php 

class facultyModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'faculty_name' => $this->input->post('facultyname'),
			'faculty_entry_time'=>date('Y-m-d h:i:s') 
		);
		$this->db->insert('faculty',$data);
	}

	public function getList()
	{
		$result=$this->db->get('faculty');
		return $result->result_array();
	}

	public function delete($id)
	{
		$this->db->where('faculty_id',$id);
		$this->db->delete('faculty');
	}

	public function activedeactive($id)
	{
		$this->db->where('faculty_id',$id);
		$result=$this->db->get('faculty');
		return $result;	
	}

	public function activestatus($id)
	{
		$this->db->where('faculty_id',$id);
		$data = array(
			'faculty_status' =>'Deactive'
		);
		$this->db->update('faculty',$data);	
	}

	public function deactivestatus($id)
	{
		$this->db->where('faculty_id',$id);
		$data = array(
			'faculty_status' =>'Active'
		);
		$this->db->update('faculty',$data);	
	}

	public function edit($id)
	{
		$this->db->where('faculty_id',$id);
		$result=$this->db->get('faculty');
		return $result->row_array();	
	}

	public function update($id)
	{
		$this->db->where('faculty_id',$id);
		$data = array(
			'faculty_name' => $this->input->post('facultyname'),
			'faculty_update_time'=>date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('faculty',$data);	
	}

	public function changepassword()
	{
		$this->db->where('faculty_id',$this->session->userdata('facultyid'));
		$this->db->where('faculty_password',$this->input->post('oldpassword'));
		$result=$this->db->get('faculty');		
		return $result;
	}

	public function changepasswordafter()
	{
		$this->db->where('faculty_id',$this->session->userdata('facultyid'));
		$data = array(
			'faculty_password' => $this->input->post('newpassword') 
		);
		$this->db->update('faculty',$data);		
	}
}
?>