<?php 

session_start();


class Surveys extends CI_Controller {

	public function index()
    {

        $this->load->view('survey_form');
    }

    public function process_survey(){
    	if($this->session->userdata('counter')){
    		$counter = $this->session->userdata('counter');
    		$this->session->set_userdata('counter', $counter + 1);
       	}
    	else {
    	$this->session->set_userdata('counter', 1);
      	}
		$counter = $this->session->userdata('counter');
    	$survey_info['name'] = $this->input->post('name');
    	$survey_info['location'] = $this->input->post('location');
    	$survey_info['language'] = $this->input->post('language');
    	$survey_info['comments'] = $this->input->post('comments');
    	$this->load->view('survey_results', ['survey_result' => $survey_info, 'count' => $counter]);
    }

    public function destroy() {
    	$this->session->sess_destroy();
        $this->load->view('survey_form');
    }

}
 ?>
