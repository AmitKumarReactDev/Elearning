<?php 

class faculty_course extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('faculty_courseModel');
		$data['list']=$this->faculty_courseModel->getList();
		$this->load->view('templates/faculty_course/list',$data);
		$this->load->view('templates/footer');
	}
	public function activedeactive($id)
	{
		$this->load->model('faculty_courseModel');
		$data=$this->faculty_courseModel->
		edit($id);
		if ($data['faculty_cstatus']=="Active")
		{
			$this->faculty_courseModel->activestatus($id);
		$this->session->set_flashdata('errMsg','1 Record Deactivated');
			
		}
		elseif ($data['faculty_cstatus']=="Deactive")
		{
			$this->faculty_courseModel->deactivestatus($id);
		$this->session->set_flashdata('Msg','1 Record Activated');
		}
		redirect('faculty_course');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('faculty_courseModel');
		$data['list']=$this->faculty_courseModel->detail($id);
		$this->load->view('templates/faculty_course/detail',$data);
		$this->load->view('templates/footer');
	}
}
?>