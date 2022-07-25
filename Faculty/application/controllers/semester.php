<?php

class semester extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$data['list']=$this->semesterModel->getList();
		$this->load->view('templates/semester/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('StreamModel');
		$data['list']=$this->StreamModel->getList();
		$this->load->view('templates/semester/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('semesterModel');
		$this->semesterModel->add();
		redirect('semester');
	}
	public function delete($id)
	{
		$this->load->model('semesterModel');
	
		$this->semesterModel->delete($id);
		redirect('semester');
	}
	public function activedeactive($id)
	{
		$this->load->model('semesterModel');
		$data=$this->semesterModel->
		edit($id);
		if ($data['semester_status']=="Active")
		{
			$this->semesterModel->activestatus($id);
		}
		elseif ($data['semester_status']=="Deactive")
		{
			$this->semesterModel->deactivestatus($id);
		}
		redirect('semester');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$edit['row']=$this->semesterModel->edit($id);
		$this->load->view('templates/semester/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('semesterModel');
		$edit['row']=$this->semesterModel->update($id);
		redirect('semester');
	}
}
 ?>