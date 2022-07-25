<?php 
class Login extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('facultyid')!="")
		{
			redirect('Welcome');
		}
		// $this->load->view('templates/header');
		$this->load->view('templates/login/index');
		// $this->load->view('templates/footer');
	}

	public function auth()
	{
		$this->load->model('LoginModel');
		$result=$this->LoginModel->validate();
		$no= $result->num_rows();
		  // die();
		if($no==1)
		{
			$facultyData=$result->row_array();
			if($facultyData['faculty_status']=="Active")
			{
				$this->session->set_userdata('facultyid',$facultyData['faculty_id']);
				$this->session->set_userdata('facultyinfo',$facultyData);
				redirect('Welcome');
			}
			else
			{
				$this->session->set_flashdata("errMsg","Wait For Admin Response!!!");
				redirect('Login');
			}
		}
		else
		{
			$this->session->set_flashdata("errMsg","id and password will be wrong");
			redirect('login');
	}
	}
	public function registration()
	{
		$this->load->view('templates/login/registration');		
	}
	public function registred()
	{
		$this->load->model('LoginModel');	
		$this->LoginModel->registration();
		redirect('Login');
	}
	public function logout()
	{
		$this->session->unset_userdata('facultyid');
		$this->session->unset_userdata('facultyinfo');
		redirect('Login');
	}
	public function Forget()
	{
		$this->load->view('templates/login/Forget');
	}
	public function ForgetPassword()
	{
		$this->load->model('LoginModel');
		$data=$this->LoginModel->MailValidate();
	    $no= $data->num_rows();
	    if($no==1)
		{
			$rand  = rand(999,9999);
			$this->LoginModel->updateotp($rand);
			$to = $this->input->post('email');
			$this->session->set_userdata('facultyEmail',$this->input->post('email'));
			mail($to,'Forget Password',$rand);
			$this->load->view('templates/login/otp');
		}
		else
		{
			$this->session->set_flashdata("errMsg","Email Address Not Exists");
			redirect('Login/Forget','Forget');
		}

	}
	public function checkotp()
	{
		$this->load->model('LoginModel');
		$data=$this->LoginModel->checkotp();
		if($data['faculty_otp']==$this->input->post('otp'))
		{
			$this->load->view('templates/login/changepassword');
		}
		else
		{
			$this->session->set_flashdata("errMsg","OTP WAS WRONG");
			$this->load->view('templates/login/otp');
		}
	}
	public function changepassword()
	{
		$this->load->model('LoginModel');
		if($this->input->post('password')==$this->input->post('cpassword'))
		{
			$this->LoginModel->UpdatePassword();
			$this->session->unset_userdata('facultyemail');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata("errMsg","password mismatch");
			$this->load->view('templates/login/otp');
		}
	}
  }
?>