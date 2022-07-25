<?php 

class State extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}
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
		$this->session->set_flashdata('Msg','1 record inserted');
		redirect('state');
	}
	public function delete($id)
	{
		$this->load->model('StateModel');
	
		$this->StateModel->delete($id);
		$this->session->set_flashdata('errMsg','1 record deleted');
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
			$this->session->set_flashdata('errMsg','1 record Deactive');

		}
		elseif ($data['state_status']=="Deactive")
		{
			$this->StateModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record active');
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
		$this->session->set_flashdata('Msg','1 record updated');
		redirect('state');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('stateModel');
		$data['list']=$this->stateModel->detail($id);
		$this->load->view('templates/state/detail',$data);
		$this->load->view('templates/footer');

	}
	public function multidelete($id)
	{		
		// $id=$this->input->post('stateselectall');
		$this->load->model('StateModel');
		$this->StateModel->multidelete($id);
		redirect("state");
	}
}
 ?>