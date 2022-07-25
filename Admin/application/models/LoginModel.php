<?php 
class LoginModel extends CI_Model
{
	public function validate()
	{
		$this->db->where('admin_email',$this->input->post('email'));
		$this->db->where('admin_password',$this->input->post('password'));
		$result=$this->db->get('admin');
		return $result;
	}
	public function LoginData()
	{
		$this->db->where('admin_id',$this->session->userdata('adminid'));
		$result=$this->db->get('admin');
		return $result->row_array();
	}
	public function MailValidate()
	{
		$this->db->where('admin_email',$this->input->post('email'));
		$result=$this->db->get('admin');
		return $result;
	}
	public function updateotp($rand)
	{
		$this->db->where('admin_email',$this->input->post('email'));
		$data = array(
			'admin_otp' => $rand, 
		);
		$this->db->update('admin',$data);
	}
	public function checkotp()
	{
		$this->db->where('admin_email',$this->session->userdata('AdminEmail'));
		$result = $this->db->get('admin');
		return $result->row_array();
	}
	public function UpdatePassword()
	{
		$this->db->where('admin_email',$this->session->userdata('AdminEmail'));
		$data = array(
			'admin_otp' => 0,
			'admin_password'=> $this->input->post('password')
		);
		$this->db->update('admin',$data);

	}
}
 ?>