<?php 
class coursematerial extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('CourseMaterialModel');
		$data['list']=$this->CourseMaterialModel->getList();
		$this->load->view('templates/course_material/list',$data);
		// $this->load->view('templates/dashboard');
		$this->load->view('templates/footer');
	}
	public function add()
	{
		
		$this->load->view('templates/header');
		$this->load->model('CourseMaterialModel');
		$data['materiallist']=$this->CourseMaterialModel->getList();
		$this->load->model('p_coursemodel');
		$data['courselist']=$this->p_coursemodel->getList();
		$this->load->view('templates/course_material/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{	
		$this->load->model('CourseMaterialModel');
		$this->CourseMaterialModel->add();
		redirect('coursematerial');
	}

	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('CourseMaterialModel');
		$data['materiallist']=$this->CourseMaterialModel->edit($id);
		$this->load->model('p_coursemodel');
		$data['courselist']=$this->p_coursemodel->getList($id);
		$this->load->view('templates/course_material/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('CourseMaterialModel');
		$this->CourseMaterialModel->update($id);
		redirect('coursematerial');
	}

}
 ?>