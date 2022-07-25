<?php 

class LoginModel extends CI_Model
{
	public function validate()
	{
		$this->db->where('faculty_email',$this->input->post('facultyemail'));
		$this->db->where('faculty_password',$this->input->post('facultypassword'));
		$result=$this->db->get('faculty');
		return $result;
	}
	public function registration()
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
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
			'faculty_photo' => $file['file_name'],
			'faculty_name' => $this->input->post('facultyname'), 
			'faculty_email' => $this->input->post('facultyemail'), 
			'faculty_qualification' => $this->input->post('facultyqualification'), 
			'faculty_password' => $this->input->post('facultypassword'), 
			'faculty_gender' => $this->input->post('facultygender'), 
			'faculty_dob' => $this->input->post('facultydob'), 
			'faculty_doj' => date('Y-m-d'), 
			'faculty_entry_time' => date('Y-m-d h:i:s'));
			$this->db->insert('faculty',$data);
		}
	}
	public function MailValidate()
	{
		$this->db->where('faculty_email',$this->input->post('email'));
		$result=$this->db->get('faculty');
		return $result;
	}
	public function updateotp($rand)
	{
		$this->db->where('faculty_email',$this->input->post('email'));
		$data = array(
			'faculty_otp' => $rand, 
		);
		$this->db->update('faculty',$data);
	}
	public function checkotp()
	{
		$this->db->where('faculty_email',$this->session->userdata('facultyEmail'));
		$result = $this->db->get('faculty');
		return $result->row_array();
	}
	public function UpdatePassword()
	{
		$this->db->where('faculty_email',$this->session->userdata('facultyEmail'));
		$data = array(
			'faculty_otp' => 0,
			'faculty_password'=> $this->input->post('password')
		);
		$this->db->update('faculty',$data);
	}
	
}
 ?>