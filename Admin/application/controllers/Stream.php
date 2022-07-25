<?php 
class stream extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['list']=$this->streamModel->getList();
		$this->load->view('templates/stream/list',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['list']=$this->streamModel->detail($id);
		$this->load->view('templates/stream/detail',$data);
		$this->load->view('templates/footer');

	}
 	public function add()
 	{
 		
 		$this->load->view('templates/header');
 		$this->load->view('templates/stream/add');
 		$this->load->view('templates/footer');
 	}
 	public function addrow()
 	{
 		$this->session->set_flashdata('Msg','1 record inserted');
 		$this->load->model('streamModel');
 		$this->streamModel->add();
 		redirect('stream');
 	}
	public function delete($id)
	{
		$this->load->model('streamModel');
		$this->streamModel->delete($id);
		$this->session->set_flashdata('errMsg','1 Record Deleted');
		redirect('stream');
	}
	public function activedeactive($id)
	{
		$this->load->model('streamModel');
		$data=$this->streamModel->
		edit($id);
		if ($data['stream_status']=="Active")
		{
			$this->streamModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 Record Deactivated');
		}
		elseif ($data['stream_status']=="Deactive")
		{
			$this->streamModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 Record Activated');
		}
		redirect('stream');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$edit['row']=$this->streamModel->edit($id);
		$this->load->view('templates/stream/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('streamModel');
		$edit['row']=$this->streamModel->update($id);
		$this->session->set_flashdata('Msg','1 Record Updated');
		redirect('stream');
	}
}
 ?>