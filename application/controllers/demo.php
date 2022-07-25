<?php
	
	
	class demo extends CI_Controller
	{
		
		public function index()
		{
			$this->load->view('templates/demo/practice');
		}

		public function ins()
		{
			$this->load->model('Demomodel');
			$this->Demomodel->ins();
			echo "<script type='text/javascript'> confirm('Insert Data Successfully');
			window:location = 'index';
			 </script>";
			// $data['list'] = $this->Demomode->ins();
		}

		public function select()
		{
			$this->load->model("Demomodel");
			$data['list'] = $this->Demomodel->get();
			$this->load->view('templates/demo/select',$data);
		}

		public function del($id)
		{
			$this->load->model("Demomodel");
			$this->Demomodel->del($id);
			redirect("demo/select");
		}

		public function edit($id)
		{
			$this->load->model("Demomodel");
			$data['list'] = $this->Demomodel->edit($id);
			$this->load->view('templates/demo/edit',$data);
		}

		public function update($id)
		{
			$this->load->model("Demomodel");
			$this->Demomodel->update($id);
			redirect("demo/select");	
		}
	}
?>