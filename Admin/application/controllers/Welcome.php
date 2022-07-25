<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}
		$title = "Welcome";
		$this->load->view('templates/header',$title);
		$this->load->model('StateModel');
		$this->load->model('SubjectModel');
		$this->load->model('FacultyModel');
		$this->load->model('SemesterModel');
		$this->load->model('p_courseModel');
		$this->load->model('faculty_courseModel');
		$this->load->model('student_classModel');
		$this->load->model('CityModel');
		$this->load->model('AreaModel');
		$this->load->model('StreamModel');
		$data['list']=$this->StateModel->NoofData();
		$data['subjectlist']=$this->SubjectModel->NoofData();
		$data['facultylist']=$this->FacultyModel->NoofData();
		$data['semesterlist']=$this->SemesterModel->NoofData();
		$data['faculty_courselist']=$this->faculty_courseModel->NoofData();
		$data['p_courselist']=$this->p_courseModel->NoofData();
		$data['student_classlist']=$this->student_classModel->NoofData();
		$data['citylist']=$this->CityModel->NoofData();
		$data['arealist']=$this->AreaModel->NoofData();
		$data['streamlist']=$this->StreamModel->NoofData();
		$this->load->view('templates/Dashboard',$data);
		$this->load->view('templates/footer');
	}
}
