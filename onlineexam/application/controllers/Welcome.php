<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "helllo";
		die();
		$this->load->view('templates/header');
		$this->load->view('templates/dashboard');
		$this->load->view('templates/footer');
		// $this->load->view('templates/index');
	}
}

