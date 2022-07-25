<?php 
/**
 * 
 */
class demo extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/demo/index');
	}
	public function fillcity($id)
	{
		echo "<option>----select city----</option>";
		echo "<option value=surat>surat</option>";
		echo "<option value=surat>baroda</option>";
	}
}
 ?>