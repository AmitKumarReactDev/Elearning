<?php	
	
	class ExamModel extends CI_Model
	{
		public function getlist()
		{
			$this->db->group_by('subject.subject_name','DISTINCT');			
			$this->db->join('subject','subject.subject_id=exam_test.subject_id');
			$this->db->where('faculty_id',$this->session->userdata('facultyid'));
			$result=$this->db->get('exam_test');
			return $result->result_array();			
		}

		public function examadd()
		{
			$ans=$this->input->post('answername');
			if ($ans=='a') 
			{
				$ans = $this->input->post('questionmcq1');			
			}
			elseif ($ans=='b') 
			{
				$ans = $this->input->post('questionmcq2');			
			}
			elseif ($ans=='c') 
			{
				$ans = $this->input->post('questionmcq3');			
			}
			elseif ($ans=='d') 
			{
				$ans = $this->input->post('questionmcq4');			
			}
			$data = array(
							'faculty_id' => $this->session->userdata('facultyid'),
							'subject_id' => $this->input->post('subjectname'),
							'question_name' => $this->input->post('questionname'),
							'question_mcq1' => $this->input->post('questionmcq1'),
							'question_mcq2' => $this->input->post('questionmcq2'),
							'question_mcq3' => $this->input->post('questionmcq3'),
							'question_mcq4' => $this->input->post('questionmcq4'),
							'question_answer' => $ans,
							'question_entry_time' => date('d-m-y h:i:s')
						);
			$this->db->insert('exam_test',$data);	
		}

		public function examupdate($id)
		{
			$data = array(
						'question_name' => $this->input->post('questionname'),
						// 'subject_id' => $this->input->post('subjectname'),
						'question_mcq1' => $this->input->post('questionmcq1'),
						'question_mcq2' => $this->input->post('questionmcq2'),
						'question_mcq3' => $this->input->post('questionmcq3'),
						'question_mcq4' => $this->input->post('questionmcq4'),
						'question_answer' => $this->input->post('answername'),
						'question_update_time' => date('D-m-y h:i:s')

					 );
			$this->db->where('exam_id',$id);
			$this->db->update('exam_test',$data);
		}

		// public function subjectwise()
		// {
		// }

		// public function activedeactive($id)
		// {
		// 	$this->db->where('exam_id',$id);
		// 	$result=$this->db->get('exam_test');
		// 	return $result;	
		// }

		// public function activestatus($id)
		// {
		// 	$this->db->where('exam_id',$id);
		// 	$data = array(
		// 		'faculty_status' =>'Deactive'
		// 	);
		// 	$this->db->update('faculty',$data);	
		// }

		// public function deactivestatus($id)
		// {
		// 	$this->db->where('faculty_id',$id);
		// 	$data = array(
		// 		'faculty_status' =>'Active'
		// 	);
		// 	$this->db->update('faculty',$data);	
		// }
		public function getexamlist()
		{
			$this->db->group_by('exam_test.subject_id','DISTINCT');
			$this->db->join('subject','subject.subject_id=exam_test.subject_id');
			$this->db->where('faculty_id',$this->session->userdata('facultyid'));
			$result=$this->db->get('exam_test');
			return $result->result_array();	
		}

		public function examedit($id)
		{

			// $this->db->order_by($id,'DESC');
			$this->db->where('exam_test.exam_id',$id);
			$this->db->join('subject','exam_test.subject_id=subject.subject_id');
			$this->db->where('faculty_id',$this->session->userdata('facultyid'));
			$result=$this->db->get('exam_test');
			return $result->row_array();	
		}
	}

?>