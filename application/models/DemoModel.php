<?php 
	
	
	class Demomodel extends CI_Model
	{
		public function ins()
		{
			$data  = array('name' =>  $this->input->post('name'));
			$this->db->insert('demo',$data);
			// echo "<script type='text/javascript'> alert('Insert Data Successfully'); </script>";
			
		}
		
		public function get()
		{
			$result = $this->db->get('demo');
			return $result->result_array();			
		}
		
		public function del($id)
		{
			$this->db->where("id",$id);
			$this->db->delete('demo');
		}

		public function edit($id)
		{
			$this->db->where('id',$id);
			$singlerow = $this->db->get('demo');
			return $singlerow->row_array();
		}
		
		public function update($id)
				{
					$data = array('Name' => $this->input->post('name'));
					$this->db->where('id',$id);
					$singlerow = $this->db->update('demo',$data);
				}		
	}



?>
