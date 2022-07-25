<?php 

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->model('CourseModel');
		$data['subjectlist']=$this->CourseModel->getsubject();
		$this->load->model('ExamCourseModel');
		$data['courselist']=$this->ExamCourseModel->getlist();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/dashboard');
		$this->load->view('templates/footer');
	}
	public function auth()
	{	
		$this->load->model('LoginModel');
		$data= $this->LoginModel->auth();
		$no= $data->num_rows();
	    if($no==1)
		{
			$StudentInfo=$data->row_array();
			$this->session->set_userdata('studentid',$StudentInfo['student_id']);
			$this->session->set_userdata('studentinfo',$StudentInfo);
			redirect('Welcome');
		}
		else
		{
			?>
			<script type="text/javascript">alert('id and password will be wrong');</script>
			<?php
			redirect('Login');
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