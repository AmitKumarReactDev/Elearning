<?php
	class faculty extends CI_Controller
	{
		public function index()
		{
			$this->load->view('templates/header');				
			$this->load->view('templates/faculty/list');				
			$this->load->view('templates/footer');	
		}
		public function faculty_detail()
		{
			$this->load->view('templates/header');				
			$this->load->view('templates/faculty/faculty_single');
			$this->load->view('templates/footer');	
		}
		
	}

?>