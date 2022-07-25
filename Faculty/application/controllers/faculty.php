<?php 
class faculty extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$data['list']=$this->facultyModel->getList();
		$this->load->view('templates/faculty/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/faculty/add');
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->load->model('facultyModel');
		$this->facultyModel->add();
		redirect('faculty');
	}
	public function delete($id)
	{
		$this->load->model('facultyModel');
	
		$this->facultyModel->delete($id);
		redirect('faculty');
	}
	public function activedeactive($id)
	{
		$this->load->model('facultyModel');
		$data=$this->facultyModel->edit($id);
		if ($data['faculty_status']=="Active")
		{
			$this->facultyModel->activestatus($id);
		}
		elseif ($data['faculty_status']=="Deactive")
		{
			$this->facultyModel->deactivestatus($id);
		}
		redirect('faculty');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$edit['row']=$this->facultyModel->edit($id);
		$this->load->view('templates/faculty/edit',$edit);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('facultyModel');
		$edit['row']=$this->facultyModel->update($id);
		redirect('faculty');
	}
	public function changepassword()
	{
		$this->load->view('templates/header');
		$this->load->model('facultyModel');
		$this->load->view('templates/faculty/changepassword');	
		$this->load->view('templates/footer');
		// redirect('login/logout');

	}
	public function changePasswordCheck()
	{
		$this->load->model('facultyModel');
		$data=$this->facultyModel->changepassword();
		$no=$data->num_rows();
		if($no==1)
		{
			$this->facultyModel->changepasswordafter();
			$this->session->set_flashdata('Msg','Password Changed successfully');
			// redirect('Login/Logout');			
			redirect('login/logout');		
		}
		else{
			$this->session->set_flashdata('errMsg','Old Password Will Be Wrong');	
			redirect('faculty/changepassword');		
		// redirect('Login');	
		}
	}

	public function examlist()
	{
		$this->load->model('ExamModel');
		$data['examlist']=$this->ExamModel->getlist();
		$this->load->view('templates/header');
		$this->load->view('templates/faculty/examlist',$data);
		$this->load->view('templates/footer');
	}

	public function examadd()
	{
		$this->load->view('templates/header');
		$this->load->model('ExamModel');		
		$data['examlist']=$this->ExamModel->getlist();
		$this->load->model('SubjectModel');
		$data['subjectlist']=$this->SubjectModel->getlist();	
		$this->load->view('templates/faculty/examadd',$data);
		$this->load->view('templates/footer');
	}

	public function examaddrow()
	{
		$this->load->model('ExamModel');		
		$this->ExamModel->examadd();
		$this->load->view('templates/faculty/examadd');
		redirect('faculty/examlist');
	}

	public function examedit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('ExamModel');
		$data['selectexam']=$this->ExamModel->examedit($id);
		$data['examlist']=$this->ExamModel->getexamlist();	
		$this->load->view('templates/faculty/examedit',$data);
		$this->load->view('templates/footer');	
	}

	public function examupdate($id)
	{
		// $this->input->post('questionname');
		$this->load->model('ExamModel');
		$this->ExamModel->examupdate($id);	
		redirect('faculty/examlist');
	}
}
 ?>