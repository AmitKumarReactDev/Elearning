<?php 

class Stream extends CI_Controller
{
	public function index()
	{
		$this->load->model('ExamModel');
		$data['subjectlist']=$this->ExamModel->getlist();
		$this->load->model('CourseModel');
		$data['streamlist']=$this->CourseModel->getstream();
		$this->load->model('ExamCourseModel');
		$data['courselist']=$this->ExamCourseModel->getlist();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/stream/view',$data);
		$this->load->view('templates/footer');
	}

	public function getsemester($id)
	{
		$id = $this->input->post('stream');
		$this->load->model('CourseModel');
		$data['semesterlist']=$this->CourseModel->getsemester($id);
		$this->load->view('view',$data);
	}

	public function getsubject($id)
	{
		$this->load->model('CourseModel');
		$data['subjectlist']=$this->CourseModel->getsubjectlist($id);
		$this->load->view('view',$data);	
	}
	public function fillsem($id)
	{
		$this->load->model('StreamModel');
		$data=$this->StreamModel->getallsem($id);
		echo "<option value=''>---Select semester---</option>";
			foreach ($data as $sem) {
				?>
				<option value="<?php echo $sem['semester_id'] ?>"><?php echo $sem['semester_name'] ?></option>
				<?php 
			}
	}
	public function fillsubject($id)
	{
		$this->load->model('StreamModel');
		$data=$this->StreamModel->getallsubject($id);
		echo "<option value=''>---Select subject---</option>";
			foreach ($data as $sem) {
				?>
				<option value="<?php echo $sem['subject_id'] ?>"><?php echo $sem['subject_name'] ?></option>
				<?php 
			}
	}
	public function materail()
	{
		$this->load->model('ExamModel');
		$data['subjectlist']=$this->ExamModel->getlist();
		$this->load->model('CourseModel');
		$data['streamlist']=$this->CourseModel->getstream();
		$this->load->model('ExamCourseModel');
		$data['courselist']=$this->ExamCourseModel->getlist();
		$this->load->view('templates/header',$data);
		$this->load->model('StreamModel');
		$data['list']=$this->StreamModel->getmaterial();
		$this->load->view('templates/stream/file.php',$data);
		$this->load->view('templates/footer');

	}

	public function demo()
	{
		$this->load->view('templates/stream/demo.php');
	}

	public function demoinput()
	{
		$this->load->model('StreamModel');
		$data['list'] = $this->StreamModel->demoinput();
		$this->load->view('templates/stream/demoview',$data);
	}
}
 ?>