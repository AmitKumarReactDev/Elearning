<?php 
/**
 * 
 */
class subject extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model('subjectModel');
		$data['list']=$this->subjectModel->getList();
		$this->load->view('templates/subject/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['streamlist']=$this->streamModel->getList();
		$this->load->model('SemesterModel');
		$data['semesterlist']=$this->SemesterModel->getList();
		$this->load->view('templates/subject/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('subjectModel');
		$this->subjectModel->add();
		redirect('subject');
	}
	public function delete($id)
	{
		$this->load->model('subjectModel');
	
		$this->subjectModel->delete($id);
		redirect('subject');
	}
	public function activedeactive($id)
	{
		$this->load->model('subjectModel');
		$data=$this->subjectModel->
		edit($id);
		if ($data['subject_status']=="Active")
		{
			$this->subjectModel->activestatus($id);
		}
		elseif ($data['subject_status']=="Deactive")
		{
			$this->subjectModel->deactivestatus($id);
		}
		redirect('subject');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('subjectModel');
		$edit['subjectlist']=$this->subjectModel->edit($id);
		$this->load->model('streamModel');
		$edit['streamlist']=$this->streamModel->getList();
		$this->load->view('templates/subject/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('subjectModel');
		$this->subjectModel->update($id);
		redirect('subject');
	}
}
 ?>