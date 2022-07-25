<?php 
/**
 * 
 */
class p_course extends CI_Controller
{
	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->model('p_courseModel');
		$data['list']=$this->p_courseModel->getList();
		$this->load->view('templates/p_course/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/p_course/add');
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('p_courseModel');
		$this->p_courseModel->add();
		redirect('p_course');
	}
	public function delete($id)
	{
		$this->load->model('p_courseModel');
	
		$this->p_courseModel->delete($id);
		redirect('p_course');
	}
	public function activedeactive($id)
	{
		$this->load->model('p_courseModel');
		$data=$this->p_courseModel->
		edit($id);
		if ($data['pcourse_status']=="Active")
		{
			$this->p_courseModel->activestatus($id);
		}
		elseif ($data['pcourse_status']=="Deactive")
		{
			$this->p_courseModel->deactivestatus($id);
		}
		redirect('p_course');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('p_courseModel');
		$edit['row']=$this->p_courseModel->edit($id);
		$this->load->view('templates/p_course/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('p_courseModel');
		$edit['row']=$this->p_courseModel->update($id);
		redirect('p_course');
	}
}
 ?>