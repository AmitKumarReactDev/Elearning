<?php 
/**
 * 
 */
class P_courseModel extends CI_Model
{
	public function add()
	{
		$config['upload_path']          = './image/CoursePhoto';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
		if (!$this->upload->do_upload('p_coursephoto'))
		{
		    $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('Msg',$error);

		}
		else
		{
				$file = $this->upload->data();
				$data = array(
				'p_course_photo' => $file['file_name'],
				'pcourse_name' => $this->input->post('p_coursename'),
				'pcourse_entry_time'=>date('Y-m-d h:i:s') 
			);

			$result=$this->db->insert('particular_course',$data);
			// return $result->row_array();
		}
	}
	public function NoOfData()
	{
		$result=$this->db->get('particular_course');
		return $result;
	}
	public function detail($id)
	{
		$this->db->where('pcourse_id',$id);
		$result=$this->db->get('particular_course');
		return $result->row_array();		
	}

	public function getList()
	{
		$result=$this->db->get('particular_course');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('pcourse_id',$id);
		$this->db->delete('particular_course');
	}
	public function activedeactive($id)
	{
		$this->db->where('pcourse_id',$id);
		$result=$this->db->get('particular_course');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_status' =>'Deactive'
		);
		$this->db->update('particular_course',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_status' =>'Active'
		);
		$this->db->update('particular_course',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('pcourse_id',$id);
		$result=$this->db->get('particular_course');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('pcourse_id',$id);
		$data = array(
			'pcourse_name' => $this->input->post('p_coursename'),
			'pcourse_update_time'=>date('Y-m-d h:i:s') 
		);
		$result=$this->db->update('particular_course',$data);	
	}
}
?>