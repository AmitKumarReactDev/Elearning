<?php 

class profile extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('profileModel');
		$data['list']=$this->profileModel->getList();
		$this->load->view('templates/profile/edit',$data);
		$this->load->view('templates/footer');
	}
	public function edit($id)
	{
		$this->load->model('profileModel');
		$edit['profilelist']=$this->profileModel->edit($id);
		$this->load->view('templates/header',$edit);
		// $this->load->model('profileModel');
		// $edit['profilelist']=$this->profileModel->edit($id);
		$this->load->view('templates/profile/update',$edit);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('profileModel');
		$this->profileModel->update($id);
		redirect('profile');
	}
}
 ?>