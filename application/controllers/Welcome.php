<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('CourseModel');
		$data['subjectlist']=$this->CourseModel->getsubject();
		$this->load->model('ExamCourseModel');
		$data['courselist']=$this->ExamCourseModel->getlist();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/dashboard');
		$this->load->view('templates/footer');
		// $this->load->view('templates/index');
	}
}

