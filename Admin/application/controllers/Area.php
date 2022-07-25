<?php 
class area extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
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
		$this->load->model('StateModel');
		$data['statelist']=$this->StateModel->getList();
		$this->load->view('templates/area/add',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('areaModel');
		$data['list']=$this->areaModel->detail($id);
		$this->load->view('templates/area/detail',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->session->set_flashdata('Msg','1 record inserted');
		$this->load->model('areaModel');
		$this->areaModel->add();
		redirect('area');
	}
	public function delete($id)
	{
		$this->load->model('areaModel');
		$this->areaModel->delete($id);
		$this->session->set_flashdata('errMsg','1 record deleted');
		redirect('area');
	}
	public function activedeactive($id)
	{
		$this->load->model('areaModel');
		$data=$this->areaModel->edit($id);
		if ($data['area_status']=="Active")
		{
			$this->areaModel->activestatus($id);
			$this->session->set_flashdata('errMsg',' record Deactivated');
		}
		elseif ($data['area_status']=="Deactive")
		{
			$this->areaModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('area');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('AreaModel');
		$edit['arealist']=$this->AreaModel->edit($id);
		$this->load->model('CityModel');
		$edit['citylist']=$this->CityModel->getList();
		$this->load->view('templates/area/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('areaModel');
		$this->areaModel->update($id);
		$this->session->set_flashdata('Msg','1 record Updated');
		redirect('area');
	}

	public function deleteall()
	{
		if ($this->input->post('selectall')) 
		{
			return "selectall";
		}
		else 
		{
			return "deselectall";
		}

	}
	public function fillcity($id)
	{
			$this->load->model('CityModel');
			$data=$this->CityModel->getallcity($id);
			echo "<option value=''>---Select city---</option>";
			foreach ($data as $sem) 
			{
				?>
				<option value="<?php echo $sem['city_id'] ?>"><?php echo $sem['city_name'] ?></option>
				<?php 
			}	
	}


}
 ?>