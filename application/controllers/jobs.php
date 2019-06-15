<?php 

class Jobs extends CI_controller{

	public function index(){

		$data['jobs'] = $this->Jobs_model->get_jobs();

		$data['main_content'] ='jobs';
		$this->load->view('layouts/main',$data);
	}


	public function details($id){

		// Get job details

		$data['jobs'] = $this->Jobs_model->get_jobs_details($id);

		$data['main_content'] ='details';
		$this->load->view('layouts/main',$data);

	}

	

	public function apply(){

		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('location','Location','trim|required|min_length[3]|max_length[25]');
		if ($this->form_validation->run()==FALSE) {		
			$data['main_content'] ='apply';
			$this->load->view('layouts/main',$data);
		} else{

			if ($this->Jobs_model->apply_jobs()) {
				$this->session->set_flashdata('applied','Your application has been sent successfully');
				redirect('jobs');
			}

		}
		
	}

	public function results(){

		$data['detail'] = $this->Jobs_model->get_search();

		$data['main_content'] ='results';
		$this->load->view('layouts/main',$data);
		
	}

	public function category($id){
		$data['category'] = $this->Jobs_model->get_category($id);
		$data['categories'] = $this->Jobs_model->get_jobs_bycategory($id);
		$data['main_content'] ='category';
		$this->load->view('layouts/main',$data);		
	}

}

?>  