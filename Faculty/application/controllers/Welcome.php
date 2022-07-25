<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		
		if($this->session->userdata('facultyid')=="")
		{
			redirect('Login');
		}
		$title = "Welcome";
		$this->load->view('templates/header',$title);
		// $this->load->view('templates/Dashboard');
		$this->load->model('Faculty_courseModel');
		$this->load->model('materialModel');
		$data['faculty_courselist']=$this->Faculty_courseModel->NoofData();
		$data['materiallist']=$this->materialModel->NoofData();
		$this->load->view('templates/Dashboard',$data);
		$this->load->view('templates/footer');
	}
}
