<?php 
class profileModel extends CI_Model
{
	public function getList()
	{
		$this->db->where('faculty_id',$this->session->userdata('facultyid'));
		$result=$this->db->get('faculty');
		return $result->row_array();
	}
	public function edit($id)
	{
		$this->db->where('faculty_id',$id);
		$result=$this->db->get('faculty');
		return $result->row_array();
	}
	public function update($id)
	{
		$config['upload_path']          = './FacultyPhoto/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
		if (!$this->upload->do_upload('facultyphoto'))
		{
		    $error = array('error' => $this->upload->display_errors());
		    print_r($error);
		    die();
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
			'faculty_photo' => $file['file_name'],
			'faculty_name' => $this->input->post('facultyname'), 
			'faculty_email' => $this->input->post('facultyemail'), 
			'faculty_qualification' => $this->input->post('facultyqualification'),  
			'faculty_gender' => $this->input->post('facultygender'), 
			'faculty_dob' => $this->input->post('facultydob'), 
			'faculty_update_time' => date('Y-m-d h:i:s')
		);
			$this->db->where('faculty_id',$id);
			$this->db->update('faculty',$data);	
		}

	}
}
?>