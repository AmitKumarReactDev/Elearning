<?php  
	
	class courseexam extends CI_Controller
	{
		public function index()
			{
				$this->load->view('templates/header');
				$this->load->model('ExamCourseModel');
				$data['examlist']=$this->ExamCourseModel->getlist();
				$this->load->view('templates/course_exam/list',$data);
				$this->load->view('templates/footer');
			}

	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('ExamCourseModel');
		$data['list']=$this->ExamCourseModel->detail($id);
		$this->load->view('templates/course_exam/detail',$data);
		$this->load->view('templates/footer');
	}

		public function delete($id)
	{
		$this->load->model('ExamCourseModel');
		$this->ExamCourseModel->delete($id);
		$this->session->set_flashdata('errMsg','1 record deleted');
		redirect('courseexam');
	}
	public function activedeactive($id)
	{
		$this->load->model('ExamCourseModel');
		$data=$this->ExamCourseModel->edit($id);
		if ($data['question_status']=="Active")
		{
			$this->ExamCourseModel->activestatus($id);
			$this->session->set_flashdata('errMsg',' record Deactivated');
		}
		elseif ($data['question_status']=="Deactive")
		{
			$this->ExamCourseModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('courseexam');
	}
  }

?>