<?php
	class faculty extends CI_Controller
	{
		public function index()
		{		
			$this->load->model('FacultyModel');
			// $this->load->model('ExamModel');
			$data['subjectlist']=$this->FacultyModel->getlist();
			$data['facultylist']=$this->FacultyModel->facultylist();			
			$data['list']=$this->FacultyModel->list();			
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			// $this->db->model('faculty');
			$this->load->view('templates/header',$data);				
			$this->load->view('templates/faculty/list',$data);				
			$this->load->view('templates/footer');	
		}
		public function faculty_detail()
		{
			$this->load->view('templates/header');				
			$this->load->view('templates/faculty/faculty_single');
			$this->load->view('templates/footer');	
		}

		public function pcoursedetail($id)
		{
			$this->load->model('FacultyModel');
			$data['subjectlist']=$this->FacultyModel->getlist();
			$data['facultylist']=$this->FacultyModel->facultylist();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();			
			$this->load->view('templates/header',$data);				
			$data['facultylist']=$this->FacultyModel->facultylist();			
			$data['pcourselist']=$this->FacultyModel->pcourseget($id);
			$this->load->view('templates/faculty/flist',$data);
			$this->load->view('templates/footer');		
		}


		// public function facultylist()
		// {
		// 	$this->load->model('ExamModel');
		// 	$data['subjectlist']=$this->ExamModel->getlist();
		// 	$data['facultylist']=$this->ExamModel->facultylist();			
		// 	$this->load->view('templates/header',$data);				
		// 	$this->load->view('templates/faculty/list',$data);				
		// 	$this->load->view('templates/footer');
		// }
	}

?>