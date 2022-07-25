<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	public function auth()
	{	
		$this->load->model('LoginModel');
		$data= $this->LoginModel->auth();
		$no= $data->num_rows();
	    if($no==1)
		{
			$StudentInfo=$data->row_array();
			$this->session->set_userdata('studentid',$StudentInfo['student_id']);
			redirect('Welcome');
		}
		else
		{
			?>
			<script type="text/javascript">alert('id and password will be wrong');</script>
			<?php
			// redirect('Login');
		}	
	}	
	public function registration()
	{
		$this->load->model('LoginModel');
		$data= $this->LoginModel->registration();
		redirect('Welcome');
	}
	public function logout()
	{
		$this->session->unset_userdata('studentid');
		redirect('Welcome');
	}
}
 ?>