<?php 

class Stream extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model('StreamModel');
		$data['list']=$this->StreamModel->getList();
		$this->load->view('templates/Stream/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/Stream/add');
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('StreamModel');
		$this->StreamModel->add();
		redirect('Stream');
	}
	public function delete($id)
	{
		$this->load->model('StreamModel');
	
		$this->StreamModel->delete($id);
		redirect('Stream');
	}
	public function activedeactive($id)
	{
		$this->load->model('StreamModel');
		$data=$this->StreamModel->
		edit($id);
		if ($data['stream_status']=="Active")
		{
			$this->StreamModel->activestatus($id);
		}
		elseif ($data['stream_status']=="Deactive")
		{
			$this->StreamModel->deactivestatus($id);
		}
		redirect('Stream');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('StreamModel');
		$edit['row']=$this->StreamModel->edit($id);
		$this->load->view('templates/Stream/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('StreamModel');
		$edit['row']=$this->StreamModel->update($id);
		redirect('Stream');
	}
}
 ?>