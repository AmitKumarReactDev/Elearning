<?php 
class material extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$this->load->view('templates/header');
		$this->load->model('materialModel');
		$data['list']=$this->materialModel->getList();
		$this->load->view('templates/material/list',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('semesterModel');
		$data['semesterlist']=$this->semesterModel->getList();
		$this->load->model('subjectModel');
		$data['subjectlist']=$this->subjectModel->getList();
		$this->load->model('streamModel');
		$data['streamlist']=$this->streamModel->getList();
		$this->load->view('templates/material/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{	
		$this->load->model('materialModel');
		$this->materialModel->add();
		redirect('material');
	}

	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('materialModel');
		$data['materiallist']=$this->materialModel->edit($id);
		$this->load->model('semesterModel');
		$data['semesterlist']=$this->semesterModel->getlist();
		$this->load->model('subjectModel');
		$data['subjectlist']=$this->subjectModel->getlist();
		$this->load->model('streamModel');
		$data['streamlist']=$this->streamModel->getlist();
		$this->load->view('templates/material/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$this->load->model('materialModel');
		$this->materialModel->update($id);
		redirect('material');
	}
	public function fillsem($id)
	{
		$this->load->model('MaterialModel');
		$data=$this->MaterialModel->getallsem($id);
		echo "<option value=''>---Select semester---</option>";
			foreach ($data as $sem) {
				?>
				<option value="<?php echo $sem['semester_id'] ?>"><?php echo $sem['semester_name'] ?></option>
				<?php 
			}
	}
	public function fillsubject($id)
	{
		$this->load->model('MaterialModel');
		$data=$this->MaterialModel->getallsubject($id);
		echo "<option value=''>---Select subject---</option>";
			foreach ($data as $sem) {
				?>
				<option value="<?php echo $sem['subject_id'] ?>"><?php echo $sem['subject_name'] ?></option>
				<?php 
			}
	}
}
 ?>