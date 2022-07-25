<?php 
/**
 * 
 */
class p_course extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('P_courseModel');
		$data['list']=$this->P_courseModel->getList();
		$this->load->view('templates/p_course/list',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('P_courseModel');
		$data['list']=$this->P_courseModel->detail($id);
		$this->load->view('templates/p_course/detail',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/p_course/add');
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('P_courseModel');
		$this->P_courseModel->add();
		$this->session->set_flashdata('Msg','1 Record Inserted');
		redirect('p_course');
	}
	public function delete($id)
	{
		$this->load->model('P_courseModel');
		$this->P_courseModel->delete($id);
		$this->session->set_flashdata('errMsg','1 Record Deleted');
		redirect('p_course');
	}
	public function activedeactive($id)
	{
		$this->load->model('P_courseModel');
		$data=$this->P_courseModel->
		edit($id);
		if ($data['pcourse_status']=="Active")
		{
			$this->P_courseModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 record Deactivated');
		}
		elseif ($data['pcourse_status']=="Deactive")
		{
			$this->P_courseModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('p_course');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('P_courseModel');
		$edit['row']=$this->P_courseModel->edit($id);
		$this->load->view('templates/p_course/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('P_courseModel');
		$edit['row']=$this->P_courseModel->update($id);
		$this->session->set_flashdata('Msg','1 record inserted');
		redirect('p_course');
	}
}
 ?>