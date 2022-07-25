<?php
	
	class studentcapply extends CI_Controller
	{
		public function add($id)
			{
				$this->load->model('StudentcapplyModel');
				$this->StudentcapplyModel->add($id);
				redirect('welcome');
			}	
	}
?>