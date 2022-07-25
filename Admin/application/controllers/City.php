<?php 
class city extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('cityModel');
		$data['list']=$this->cityModel->getList();
		$this->load->view('templates/city/list',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('cityModel');
		$data['list']=$this->cityModel->detail($id);
		$this->load->view('templates/city/detail',$data);
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
		$this->session->set_flashdata('Msg','1 Record Inserted');
		$this->load->model('cityModel');
		$this->cityModel->add();
		redirect('city');
	}
	public function delete($id)
	{
		$this->load->model('cityModel');
		$this->cityModel->delete($id);
		$this->session->set_flashdata('errMsg','1 record Deleted');
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
			$this->session->set_flashdata('errMsg','1 record Deactivated');
			
		}
		elseif ($data['city_status']=="Deactive")
		{
			$this->cityModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
			
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
		$this->session->set_flashdata('Msg','1 record Updated');
		redirect('city');
	}
}
 ?>