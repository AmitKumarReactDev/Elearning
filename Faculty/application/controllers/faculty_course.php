<?php 
class faculty_course extends CI_Controller
{
	public function index()
	{
		// if($this->session->userdata('facultyid')=="")
		// {
		// 	redirect('Login');
		// }
		$this->load->view('templates/header');
		$this->load->model('faculty_courseModel');
		$data['list']=$this->faculty_courseModel->getList();
		$this->load->view('templates/faculty_course/list',$data);
		$this->load->view('templates/footer');
}	
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('p_courseModel');
		$data['courselist']=$this->p_courseModel->getList();
		$this->load->view('templates/faculty_course/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('faculty_courseModel');
	    $this->faculty_courseModel->add();
		redirect('faculty_course');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('faculty_courseModel');
		$edit['fcourselist']=$this->faculty_courseModel->edit($id);
		$this->load->model('p_coursemodel');
		$edit['pcourselist']=$this->p_coursemodel->getList();
		$this->load->view('templates/faculty_course/edit',$edit);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('faculty_courseModel');
		$this->faculty_courseModel->update($id);
		redirect('faculty_course');
	}
	public function finalsubmit($id)
	{
		$this->load->model('faculty_courseModel');
		$data['$facultyclist']=$this->faculty_courseModel->finalsubmit($id);
		
		print_r($facultyclist);
		die();
		// redirect('faculty_course');
	}
 }