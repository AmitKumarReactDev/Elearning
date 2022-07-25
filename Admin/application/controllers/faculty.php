<?php 
/**
 * 
 */
class faculty extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$data['list']=$this->facultyModel->getList();
		$this->load->view('templates/faculty/list',$data);
		$this->load->view('templates/footer');
	}
	
	public function delete($id)
	{
		$this->load->model('facultyModel');
		$this->facultyModel->delete($id);
		$this->session->set_flashdata('errMsg','1 Record Deleted');
		redirect('faculty');
	}
	public function activedeactive($id)
	{
		$this->load->model('facultyModel');
		$data=$this->facultyModel->
		edit($id);
		if ($data['faculty_status']=="Active")
		{
			$this->facultyModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Deactivated');
		}
		elseif ($data['faculty_status']=="Deactive")
		{
			$this->facultyModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 Record Activated');
		}
		redirect('faculty');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$edit['row']=$this->facultyModel->edit($id);
		$this->load->view('templates/faculty/edit',$edit);
		$this->load->view('templates/footer');

	}

	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$data['list']=$this->facultyModel->detail($id);
		$this->load->view('templates/faculty/detail',$data);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('facultyModel');
		$edit['row']=$this->facultyModel->update($id);
		$this->session->set_flashdata('Msg','1 Record Updated');
		redirect('faculty');
	}
}
 ?>