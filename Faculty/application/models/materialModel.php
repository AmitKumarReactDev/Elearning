<?php 
class materialModel extends CI_Model
{
	public function add()
	{
		print $this->input->post('streamname');
		print $this->input->post('semestername');
		print $this->input->post('subjectname');
		print $this->session->userdata('facultyid');
		print $this->input->post('materialfilename');
		// die();
		$config['upload_path']          = './image/CourseMaterial/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['max_size']             = 50000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);

		if(!$this->upload->do_upload('materialfilename'))
		{
		    $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('Msg',$error);
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
				'stream_id' => $this->input->post('streamname'),
				'semester_id' => $this->input->post('semestername'),
				'subject_id' => $this->input->post('subjectname'),
				'faculty_id'=> $this->session->userdata('facultyid'),
				'material_pdf' => $file['file_name']
			);
	 		$this->db->insert('material',$data);
	 	}
	}

	public function NoofData()
	{
		$result=$this->db->get('material');
		return $result;
	}
	
	public function getList()
	{
		$this->db->join('semester','semester.semester_id=material.semester_id','left');
		$this->db->join('stream','stream.stream_id=material.stream_id','left');
		$this->db->join('subject','subject.subject_id=material.subject_id','left');
		$this->db->join('faculty','faculty.faculty_id=material.faculty_id','left');
		$this->db->where('material.faculty_id',$this->session->userdata('facultyid'));
		$result=$this->db->get('material');
		return $result->result_array();
		}
	
	public function edit($id)
	{
		$this->db->where('material_id',$id);
		$result=$this->db->get('material');
		return $result->row_array();	
	}
	
	public function update($id)
	{
		$this->db->where('material_id',$id);
		$data = array(
				'stream_id' => $this->input->post('streamname'),
				'semester_id' => $this->input->post('semestername'),
				'subject_id' => $this->input->post('subjectname'),
				'faculty_id'=> $this->session->userdata('facultyid'),
				'material_pdf' => $this->input->post('materialfilename')

			);
		$result=$this->db->update('material',$data);	
		}
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
}
?>