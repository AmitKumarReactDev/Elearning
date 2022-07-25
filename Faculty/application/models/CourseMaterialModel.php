<?php 
class CourseMaterialModel extends CI_Model
{
	public function add()
	{
		$config['upload_path']          = './image/ParticularCourseMaterial/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['max_size']             = 5000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
		if (!$this->upload->do_upload('materialfilename'))
		{
		    $error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
			'pcourse_id' => $this->input->post('pcoursename'),
				'material_title' => $this->input->post('materialtitle'),
				'material_desc' => $this->input->post('materialdesc'),
				'faculty_id'=> $this->session->userdata('facultyid'),
				'material_pdf' => $file['file_name'],
				'material_entry_time' => date('d-m-y h:m:s')
			);
		}
	 		$this->db->insert('course_material',$data);
	}

	public function NoofData()
	{
		$result=$this->db->get('material');
		return $result;
	}
	
	public function getList()
	{
		$this->db->join('particular_course','particular_course.pcourse_id=course_material.pcourse_id');
		$this->db->join('faculty','faculty.faculty_id=course_material.faculty_id');
		// $this->db->join('faculty','faculty.faculty_id=material.faculty_id');
		$this->db->where('course_material.faculty_id',$this->session->userdata('facultyid'));
		$result=$this->db->get('course_material');
		return $result->result_array();
		}
	
	public function edit($id)
	{
		$this->db->join('particular_course','particular_course.pcourse_id=course_material.pcourse_id');
		$this->db->join('faculty','faculty.faculty_id=course_material.faculty_id');
		// $this->db->where('course_material.faculty_id',$this->session->userdata('facultyid'));
		$this->db->where('material_cid',$id);
		$result=$this->db->get('course_material');
		return $result->row_array();	
	}
	
	public function update($id)
	{
		$this->db->where('material_cid',$id);
		$data = array(
			'pcourse_id' => $this->input->post('pcoursename'),
				'material_title' => $this->input->post('materialtitle'),
				'material_desc' => $this->input->post('materialdesc'),
				'faculty_id'=> $this->session->userdata('facultyid'),
				'material_pdf' => $this->input->post('materialfilename'),
				'material_update_time' => date('d-m-y h:m:s')
			);
	$result=$this->db->update('course_material',$data);	
	}
}
?>