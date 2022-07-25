<?php

class courseexam extends CI_Controller
{
	public function examlist()
	{
		$this->load->view('templates/header');
		$this->load->model('CourseExamModel');
		$data['examlist']=$this->CourseExamModel->getlist();
		$this->load->view('templates/course_exam/examlist',$data);
		$this->load->view('templates/footer');
	}

	public function examadd()
	{
		$this->load->view('templates/header');
		$this->load->model('CourseExamModel');		
		$data['examlist']=$this->CourseExamModel->getpcourse();	
		$this->load->view('templates/course_exam/examadd',$data);
		$this->load->view('templates/footer');
	}

	public function examaddrow()
	{
		$this->load->model('CourseExamModel');		
		$this->CourseExamModel->examadd();
		redirect('courseexam/examlist');
		// $this->load->view('templates/course_exam/examlist');
		
	}

	public function examedit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('CourseExamModel');
		$data['selectexam']=$this->CourseExamModel->examedit($id);
		$data['examlist']=$this->CourseExamModel->getexamlist();	
		$this->load->view('templates/course_exam/examedit',$data);
		$this->load->view('templates/footer');	
	}

	public function examupdate($id)
	{
		// $this->input->post('questionname');
		$this->load->model('CourseExamModel');
		$this->CourseExamModel->examupdate($id);	
		redirect('courseexam/examlist');
	}
}
?>