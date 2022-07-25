<?php 

class student_class extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}
		$this->load->model('student_classModel');
		$data['studentlist']=$this->student_classModel->getList();
		$this->load->view('templates/header');
		$this->load->view('templates/student_class/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->session->set_flashdata('Msg','1 Record Inserted');
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['streamlist']=$this->streamModel->getList();
		$this->load->model('SemesterModel');
		$data['semesterlist']=$this->SemesterModel->getList();
		$this->load->view('templates/student_class/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('student_classModel');
		$this->student_classModel->add();
		redirect('student_class');
	}
	public function delete($id)
	{
		$this->load->model('student_classModel');
	
		$this->student_classModel->delete($id);
		$this->session->set_flashdata('Msg','1 Record Deleted');
		redirect('student_class');
	}
	public function activedeactive($id)
	{
		$this->load->model('student_classModel');
		$data=$this->student_classModel->
		edit($id);
		if ($data['student_class_status']=="Active")
		{
			$this->student_classModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Deactivated');
		}
		elseif ($data['student_class_status']=="Deactive")
		{
			$this->student_classModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 Record Activated');
		}
		redirect('student_class');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('student_classModel');
		$edit['student_classlist']=$this->student_classModel->edit($id);
		$this->load->model('streamModel');
		$edit['streamlist']=$this->streamModel->getList();
		$this->load->model('SemesterModel');
		$edit['semesterlist']=$this->SemesterModel->getList();
		$this->load->view('templates/student_class/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('student_classModel');
		$this->student_classModel->update($id);
		$this->session->set_flashdata('Msg','1 Record Updated');
		redirect('student_class');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('student_classModel');
		$data['list']=$this->student_classModel->detail($id);
		$this->load->view('templates/student_class/detail',$data);
		$this->load->view('templates/footer');
	}

}
 ?>