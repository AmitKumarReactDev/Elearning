<?php
	class blog extends CI_Controller
	{
		public function index()
		{
			$this->load->view('templates/header');				
			$this->load->view('templates/blog/list');				
			$this->load->view('templates/footer');	
		}			
		
	}
?>