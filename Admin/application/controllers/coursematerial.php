<?php
	
	class coursematerial extends CI_Controller
	{
	
	public function index()
			{
				$this->load->view('templates/header');
				$this->load->model('CourseMaterialModel');
				$data['materiallist']=$this->CourseMaterialModel->getlist();
				$this->load->view('templates/coursematerial/list',$data);
				$this->load->view('templates/footer');
			}	

	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('CourseMaterialModel');
		$data['list']=$this->CourseMaterialModel->detail($id);
		$this->load->view('templates/coursematerial/detail',$data);
		$this->load->view('templates/footer');
	}

	public function activedeactive($id)
	{
		$this->load->model('CourseMaterialModel');
		$data=$this->CourseMaterialModel->edit($id);
		if ($data['material_status']=="Active")
		{
			$this->CourseMaterialModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 record Deactivated');
		}
		elseif ($data['material_status']=="Deactive")
		{
			$this->CourseMaterialModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('coursematerial/index');
	}
}
?>