<?php 
/**
 * 
 */
class Faculty_courseModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'faculty_id' => $this->session->userdata('facultyid'),
			'pcourse_id' =>$this->input->post('coursename'),
			'faculty_ctitle'=> $this->input->post('fctitlename'),
			'faculty_cdesc'=> $this->input->post('fcdescname'),
			'faculty_centry_time'=> date('Y-m-d h:i:s')

		);
		$this->db->insert('Faculty_course',$data);
	}	
	public function NoofData()
	{
		$result=$this->db->get('faculty_course');
		return $result;
	}
	public function getList()
	{
		// $this->db->group_by('particular_course.pcourse_name','DISTINCT');
		// print_r($this->session->userdata('facultyid'));
		// die();			
		$this->db->where('faculty_id',$this->session->userdata('facultyid'));
		$this->db->join('particular_course','particular_course.pcourse_id=Faculty_course.pcourse_id');
		$result=$this->db->get('Faculty_course');
		return $result->result_array();
	}
	public function edit($id)
	{
		$this->db->where('faculty_cid',$id);
		$result=$this->db->get('faculty_course');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('faculty_cid',$id);
		$data = array(
			'pcourse_id' => $this->input->post('pcoursename'),
			'faculty_ctitle' => $this->input->post('fctitlename'),
			'faculty_cdesc' => $this->input->post('fcdescname')
		);
		$this->db->update('faculty_course',$data);	
	}
	public function finalsubmit($id)
	{
		$this->db->where('faculty_cid',$id);
		$result=$this->db->get('faculty_course');
		return $result->row_array();
	}

}
 ?>