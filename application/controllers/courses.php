<?php
	class courses extends CI_Controller
	{
		public function index()
		{
			$this->load->model('CourseModel');
			$data['subjectlist']=$this->CourseModel->getsubject();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
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
			$data['list']=$this->CourseModel->getList();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$this->load->model('CourseModel');
			$data['courselist']=$this->CourseModel->course_single($id);
			$data['coursedescription']=$this->CourseModel->faculty_course($id);
			$data['coursematerial']=$this->CourseModel->couresmaterial($id);
			$data['studentapplycoureslist']=$this->CourseModel->studentapplycoures();
			$this->load->view('templates/Courses/course_single',$data);	
			$this->load->view('templates/footer');
		}	

		public function course_view($id)
		{
			$this->load->model('CourseModel');
			$data['courselist']=$this->CourseModel->courseview($id);
			$this->load->view('templates/demo/sidenav',$data);
		}
		public function applied($id)
		{
			$this->load->model('CourseModel');
			$data['subjectlist']=$this->CourseModel->getsubject();
			$data['list']=$this->CourseModel->getList();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$this->load->model('CourseModel');
			$this->CourseModel->AppliedCoures($id);
			$data['courselist']=$this->CourseModel->course_single($id);
			$data['coursedescription']=$this->CourseModel->faculty_course($id);
			$data['coursematerial']=$this->CourseModel->couresmaterial($id);
			$data['studentapplycoureslist']=$this->CourseModel->studentapplycoures();
			$this->load->view('templates/Courses/course_single',$data);	
			$this->load->view('templates/footer');
		}
		public function appliedcourse()
		{
			$this->load->model('CourseModel');
			$data['subjectlist']=$this->CourseModel->getsubject();
			$data['list']=$this->CourseModel->getList();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$this->load->model('StudentcapplyModel');
			$data['studentlist'] = $this->StudentcapplyModel->applycoureslist();
			$this->load->view('templates/Courses/studentcourselist',$data);	
			$this->load->view('templates/footer');
	
		}
	}


?>