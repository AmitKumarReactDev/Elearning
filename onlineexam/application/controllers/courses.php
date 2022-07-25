<?php
	class courses extends CI_Controller
	{
		public function index()
		{
			$this->load->model('CourseModel');
			$data['subjectlist']=$this->CourseModel->getsubject();
			$this->load->view('templates/header',$data);
			$this->load->model('CourseModel');
			$data['list']=$this->CourseModel->getList();		
			$this->load->view('templates/courses/list',$data);	
			$this->load->view('templates/footer');	
		}		
		public function course_single($id)
		{
			$this->load->model('CourseModel');
			$data['subjectlist']=$this->CourseModel->getsubject();
			$this->load->view('templates/header',$data);
			print_r($data);
			die();			
			// $this->load->model('CourseModel');
			$data['courselist']=$this->CourseModel->course_single($id);
			$this->load->view('templates/courses/course_single',$data);	
			$this->load->view('templates/footer');
		}	
	}

?>