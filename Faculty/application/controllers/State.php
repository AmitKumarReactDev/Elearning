<?php 
/**
 * 
 */
class State extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model('StateModel');
		$data['list']=$this->StateModel->getList();
		$this->load->view('templates/state/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/state/add');
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('StateModel');
		$this->StateModel->add();
		redirect('state');
	}
	public function delete($id)
	{
		$this->load->model('StateModel');
	
		$this->StateModel->delete($id);
		redirect('state');
	}
	public function activedeactive($id)
	{
		$this->load->model('StateModel');
		$data=$this->StateModel->
		edit($id);
		if ($data['state_status']=="Active")
		{
			$this->StateModel->activestatus($id);
		}
		elseif ($data['state_status']=="Deactive")
		{
			$this->StateModel->deactivestatus($id);
		}
		redirect('state');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('StateModel');
		$edit['row']=$this->StateModel->edit($id);
		$this->load->view('templates/state/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('StateModel');
		$edit['row']=$this->StateModel->update($id);
		redirect('state');
	}
}
 ?>