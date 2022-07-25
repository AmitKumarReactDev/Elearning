<?php
	/**
	 * 
	 */
	class notice extends CI_Controller
	{
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('templates/notice/list');
			$this->load->view('templates/footer');
		}
	}
?>