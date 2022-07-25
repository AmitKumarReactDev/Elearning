<?php
	class courseexam extends CI_Controller
	{
		public function index()
		{
			$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
			// $this->load->model('ExamCourseModel');
			// $data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/dashboard');	
			$this->load->view('templates/footer');	
		}			
		public function examdesc($id)
		{
		     if($this->session->userdata('studentid')=='') 
             {
              		echo "<script>";
					echo "alert('Not Login')";
					echo "</script>";
					redirect('Login/index');
             }
             $this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
        	$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$data['examlist']=$this->ExamCourseModel->coursewise($id);
			$this->load->view('templates/course_exam/examdesc',$data);	
			$this->load->view('templates/footer');	
		}
		public function examresult()
		{
            $this->load->model('ExamModel');
			$data['subjectlist']=$this->ExamModel->getlist();
        	$this->load->model('ExamCourseModel');
			$data['courselist']=$this->ExamCourseModel->getlist();
			$this->load->model('ExamCourseModel');
			$data['examlist']=$this->ExamCourseModel->getlist();
			$this->load->view('templates/header',$data);
			$useans = $this->input->post('opt');
			$id = $this->input->post('pcourseid');
			$question_id = array_keys($useans);
			$this->load->model('ExamCourseModel');
			$data=$this->ExamCourseModel->coursewise($id);
			$count = 0;
			$totalatempt = count($question_id);
			$totalquestion = count($data);
			$totalunatempt = $totalquestion-$totalatempt;
			// $totalnotatempt = count($question_id) - $totalatempt;
			// print_r($data);
		
		// 	foreach ($data as $exam_id)
		// 	{
		// 		foreach($question_id as $value) 
		// 		{
		// 			if($value == $exam_id['exam_id']) 
		// 			{
		// 				foreach ($useans as $ans) 
		// 				{
		// 					if($ans==$exam_id['question_answer']) 
		// 					{
		// 						$count++;
		// 					} 
		// 				}
		// 			}					
		// 		}
		// 	}
		// 	// print "correct ans".$count
		// 	$wrong = $totalatempt - $count;
		// 	$result['resultlist'] = array
		// 	(
		// 	 'totalquestion' => $totalquestion,
		// 	 'totalatempt' => $totalatempt,
		// 	 'cans' => $count,
		// 	 'wans' => $wrong,
		// 	 'totalunatempt' => $totalunatempt,
		// 	 'pcoursename' => $data[0]['pcourse_name']
		// 	);
		// 	print_r($result);
		// 	die();
		// 	$this->load->view('templates/courseexam/examresult',$result);
		// 	$this->load->view('templates/footer');	
		// }
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
			 'pcoursename' => $data[0]['pcourse_name']
			);
			$this->load->view('templates/course_exam/examresult',$result);
			$this->load->view('templates/footer');	
		}
	}
?>