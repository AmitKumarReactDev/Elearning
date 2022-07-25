<?php 
class area extends CI_Controller
{
	public function index()
	{	
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('areaModel');
		$data['list']=$this->areaModel->getList();
		$this->load->view('templates/area/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('CityModel');
		$data['list']=$this->CityModel->getList();
		$this->load->view('templates/area/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('areaModel');
		$this->areaModel->add();
		redirect('area');
	}
	public function delete($id)
	{
		$this->load->model('areaModel');
	
		$this->areaModel->delete($id);
		redirect('area');
	}
	public function activedeactive($id)
	{
		$this->load->model('areaModel');
		$data=$this->areaModel->
		edit($id);
		if ($data['area_status']=="Active")
		{
			$this->areaModel->activestatus($id);
		}
		elseif ($data['area_status']=="Deactive")
		{
			$this->areaModel->deactivestatus($id);
		}
		redirect('area');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('areaModel');
		$edit['arealist']=$this->areaModel->edit($id);
		$this->load->model('CityModel');
		$edit['citylist']=$this->CityModel->getList();
		$this->load->view('templates/area/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('areaModel');
		$this->areaModel->update($id);
		redirect('area');
	}
}
 ?>