<?php 
class semester extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$data['list']=$this->semesterModel->getList();
		$this->load->view('templates/semester/list',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$data['list']=$this->semesterModel->detail($id);
		$this->load->view('templates/semester/detail',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['list']=$this->streamModel->getList();
		$this->load->view('templates/semester/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->session->set_flashdata('Msg','1 Record Inserted');
		$this->load->model('semesterModel');
		$this->semesterModel->add();
		redirect('semester');
	}
	public function delete($id)
	{
		$this->load->model('semesterModel');
		$this->semesterModel->delete($id);
		$this->session->set_flashdata('errMsg','1 Record Deleted');
		redirect('semester');
	}
	public function activedeactive($id)
	{
		$this->load->model('semesterModel');
		$data=$this->semesterModel->
		edit($id);
		if ($data['semester_status']=="Active")
		{
			$this->semesterModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Deactivated');
		}
		elseif ($data['semester_status']=="Deactive")
		{
			$this->semesterModel->deactivestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Activated');
		}
		redirect('semester');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$edit['semesterlist']=$this->semesterModel->edit($id);
		$this->load->model('streamModel');
		$edit['streamlist']=$this->streamModel->getList();
		$this->load->view('templates/semester/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('semesterModel');
		$this->semesterModel->update($id);
		$this->session->set_flashdata('Msg','1 Record Updated');
		redirect('semester');
	}
}
 ?>