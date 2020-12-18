<?php namespace App\Controllers;

class Questions extends BaseController {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function quizdisplay()
	{
		$this->load->model('Quizmodel');
		$this->data['questions'] = $this->Quizmodel->getQuestions();
		$this->load->view('ujian_mhs', $this->data);
	}
	
		public function resultdisplay()
	{
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
		);

        $this->load->model('Quizmodel');
		$this->data['results'] = $this->Quizmodel->getQuestions();
		$this->load->view('result_display', $this->data);
	}
}

