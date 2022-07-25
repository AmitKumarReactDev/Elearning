<!-- public function validateLogin()
	{
		if($this->session->has_userdata('SubadminId')){
			redirect("Welcome");
		}
		$this->load->model("LoginModel");
		$userData=$this->LoginModel->getUserData();
		if($userData->num_rows()>0){
			$adminInfo=$userData->row_array();
			$this->session->set_userdata('SubadminInfo',$adminInfo);
			$this->session->set_userdata('SubadminId',$adminInfo['Admin_No']);
			
			if ($this->input->post("rememberme")) {
				$this->load->helper('cookie'); 
				$namecookie= array(
 				   'name'   => 'adminName',
		           'value'  => $adminInfo['Admin_Name'],
		           'expire' => '3600',
 			    );

 			    $passwordcookie= array(
		           'name'   => 'adminPassword',
		           'value'  => $adminInfo['Admin_Password'],
		           'expire' => '3600',
 			    );
				$this->input->set_cookie($namecookie);
				$this->input->set_cookie($passwordcookie);
			} -->
<?php 
class Login extends CI_Controller
{

	public function index()
	{
		if($this->session->userdata('adminid')!="")
		{
			redirect('Welcome');
		}
		$this->load->view('templates/login/index');
	}
	public function auth()
	{
		$this->load->model('LoginModel');
		$data=$this->LoginModel->validate();
	    $no= $data->num_rows();
	    if($no==1)
		{
			$AdminInfo=$data->row_array();
			$this->session->set_userdata('adminid',$AdminInfo['admin_id']);
			if ($this->input->post("rememberme")) {
				$this->load->helper('cookie'); 
				$namecookie= array(
 				   'name'   => 'admin_email',
		           'value'  => $AdminInfo['admin_email'],
		           'expire' => '360000',
 			    );

 			    $passwordcookie= array(
		           'name'   => 'admin_password',
		           'value'  => $AdminInfo['admin_password'],
		           'expire' => '360000',
 			    );
 			    // setcookie('email',$this->input->post('email'),time()+3600);
 			    // setcookie('password',$this->input->post('password'),time()+3600);
				$this->input->set_cookie($namecookie);
				// die();
				$this->input->set_cookie($passwordcookie);
				redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata("errMsg","id and password will be wrong");
			redirect('login');
		}
		
	}
}
	public function logout()
	{
		$this->session->unset_userdata('adminid');
		redirect('login');
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
			$this->session->set_userdata('AdminEmail',$this->input->post('email'));
			mail($to,'Forget Password',$rand);
			$this->load->view('templates/login/otp');
		}
		else
		{
			$this->session->set_flashdata("errMsg","Email Address Not Exists");
			redirect('Login/Forget');
		}

	}
	public function checkotp()
	{
		$this->load->model('LoginModel');
		$data=$this->LoginModel->checkotp();
		if($data['admin_otp']==$this->input->post('otp'))
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
			$this->session->unset_userdata('AdminEmail');
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