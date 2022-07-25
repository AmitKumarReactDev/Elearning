<?php 

class StudentDetail extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('StudentDetailModel');
		$data['studentlist']=$this->StudentDetailModel->getList();
		$this->load->view('templates/student_class/list',$data);
		$this->load->view('templates/footer');
	}
	public function activedeactive($id)
	{
		$this->load->model('StudentDetailModel');
		$data=$this->StudentDetailModel->
		edit($id);
		if ($data['student_status']=="Active")
		{
			$this->StudentDetailModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Deactivated');
		}
		elseif ($data['student_status']=="Deactive")
		{
			$this->StudentDetailModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 Record Activated');
		}
		redirect('StudentDetail');
	}
	public function courselist()
	{
		$this->load->view('templates/header');
		$this->load->model('StudentDetailModel');
		$data['studentlist']=$this->StudentDetailModel->coureslist();
		$this->load->view('templates/student_class/coureslist',$data);
		$this->load->view('templates/footer');
		
	}

}
 ?>