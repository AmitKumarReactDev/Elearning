<?php 
class city extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model('cityModel');
		$data['list']=$this->cityModel->getList();
		$this->load->view('templates/city/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('StateModel');
		$data['list']=$this->StateModel->getList();
		$this->load->view('templates/city/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('cityModel');
		$this->cityModel->add();
		redirect('city');
	}
	public function delete($id)
	{
		$this->load->model('cityModel');
	
		$this->cityModel->delete($id);
		redirect('city');
	}
	public function activedeactive($id)
	{
		$this->load->model('cityModel');
		$data=$this->cityModel->
		edit($id);
		if ($data['city_status']=="Active")
		{
			$this->cityModel->activestatus($id);
		}
		elseif ($data['city_status']=="Deactive")
		{
			$this->cityModel->deactivestatus($id);
		}
		redirect('city');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('cityModel');
		$edit['citylist']=$this->cityModel->edit($id);
		$this->load->model('StateModel');
		$edit['statelist']=$this->StateModel->getList();
		$this->load->view('templates/city/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('cityModel');
		$this->cityModel->update($id);
		redirect('city');
	}
}
 ?>