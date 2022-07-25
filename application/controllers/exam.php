<?php
	class exam extends CI_Controller
	{
		public function index()
		{
			$this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/dashboard');	
			$this->load->view('templates/footer');	
		}			
		public function examdesc($id)
		{
		      if ($this->session->userdata('studentid')=='') 
              {
              		echo "<script>";
					echo "alert('Not Login')";
					echo "</script>";
					// $this->load->view('templates/exam/examlist');
					redirect('Login/index');
              }
    		$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
        	$this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
			$this->load->view('templates/header',$data);
			$data['examlist']=$this->ExamModel->subjectwise($id);
			$this->load->view('templates/exam/examdesc',$data);	
			$this->load->view('templates/footer');	
		}
		public function examresult()
		{
			$this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
			$this->load->view('templates/header',$data);
			$useans = $this->input->post('opt');
			$id = $this->input->post('subjectid');
			$question_id = array_keys($useans);
			$this->load->model('ExamModel');
			$data=$this->ExamModel->subjectwise($id);
			$count = 0;
			$totalatempt = count($question_id);
			$totalquestion = count($data);
			$totalunatempt = $totalquestion-$totalatempt;
			// $totalnotatempt = count($question_id) - $totalatempt;
			// print_r($data);
		
			foreach ($data as $exam_id)
			{
				foreach($question_id as $value) 
				{
					if($value == $exam_id['exam_id']) 
					{
						foreach ($useans as $ans) 
						{
							if($ans==$exam_id['question_answer']) 
							{
								$count++;
							} 
						}
					}					
				}
			}
			// print "correct ans".$count;
			$wrong = $totalatempt - $count;
			// echo  "wrong ans".$wrong;
			// print "total attempt".$totalatempt;
			$result['resultlist'] = array
			(
			 'totalquestion' => $totalquestion,
			 'totalatempt' => $totalatempt,
			 'cans' => $count,
			 'wans' => $wrong,
			 'totalunatempt' => $totalunatempt,
			 'subjectname' => $data[0]['subject_name']
			);
			$this->load->view('templates/exam/examresult',$result);
			$this->load->view('templates/footer');	
		}

		// public function answerkey($id)
		// { 
		// 	$data['resultlist']=explode('.',$resultlist);
		// 	$this->load->view('templates/exam/examanswerkey',$data);
		// }
	}
?>