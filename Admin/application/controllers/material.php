<?php
	
	class material extends CI_Controller
	{
		public function index()
			{
				$this->load->view('templates/header');
				$this->load->model('MaterialModel');
				$data['materiallist']=$this->MaterialModel->getlist();
				$this->load->view('templates/material/list',$data);
				$this->load->view('templates/footer');
			}	

	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('MaterialModel');
		$data['list']=$this->MaterialModel->detail($id);
		$this->load->view('templates/material/detail',$data);
		$this->load->view('templates/footer');
	}

	public function activedeactive($id)
	{
		$this->load->model('MaterialModel');
		$data=$this->MaterialModel->edit($id);
		if ($data['material_status']=="Active")
		{
			$this->MaterialModel->activestatus($id);
			$this->session->set_flashdata('errMsg',' record Deactivated');
		}
		elseif ($data['material_status']=="Deactive")
		{
			$this->MaterialModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('material');
	}
	
}
?>