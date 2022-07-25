<?php  
	
	class exam extends CI_Controller
	{
		public function index()
			{
				$this->load->view('templates/header');
				$this->load->model('ExamModel');
				$data['examlist']=$this->ExamModel->getlist();
				$this->load->view('templates/exam/list',$data);
				$this->load->view('templates/footer');
			}

	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('ExamModel');
		$data['list']=$this->ExamModel->detail($id);
		$this->load->view('templates/exam/detail',$data);
		$this->load->view('templates/footer');
	}

		public function delete($id)
	{
		$this->load->model('ExamModel');
		$this->ExamModel->delete($id);
		$this->session->set_flashdata('errMsg','1 record deleted');
		redirect('exam');
	}
	public function activedeactive($id)
	{
		$this->load->model('ExamModel');
		$data=$this->ExamModel->edit($id);
		if ($data['question_status']=="Active")
		{
			$this->ExamModel->activestatus($id);
			$this->session->set_flashdata('errMsg',' record Deactivated');
		}
		elseif ($data['question_status']=="Deactive")
		{
			$this->ExamModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('exam');
	}
	// public function edit($id)
	// {
	// 	$this->load->view('templates/header');
	// 	$this->load->model('AreaModel');
	// 	$edit['arealist']=$this->AreaModel->edit($id);
	// 	$this->load->model('CityModel');
	// 	$edit['citylist']=$this->CityModel->getList();
	// 	$this->load->view('templates/area/edit',$edit);
	// 	$this->load->view('templates/footer');

	// }
	// public function update($id)
	// {
	// 	$this->load->model('areaModel');
	// 	$this->areaModel->update($id);
	// 	$this->session->set_flashdata('Msg','1 record Updated');
	// 	redirect('area');
	// }	
  }

?>