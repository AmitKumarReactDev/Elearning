<?php 
/**
 * 
 */
class LoginModel extends CI_Model
{
	public function auth()
	{
		$this->db->where('student_email',$this->input->post('email'));
		$result=$this->db->where('student_password',$this->input->post('password'));
		$result=$this->db->get('student');
		return $result;
	}	
	public function registration()
	{
		$data = array(
			'student_name' =>  $this->input->post('signupName'), 
			'student_email' => $this->input->post('signupEmail'), 
			'student_password' => $this->input->post('password'), 
			'student_gender' => $this->input->post('gender'), 
			'student_entry_time' => date('Y-m-d h:i:s')
	);
		$this->db->insert('student',$data);
	}
}
 ?>