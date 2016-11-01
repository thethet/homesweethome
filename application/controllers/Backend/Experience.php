<?php
	/**
	* 
	*/
	class Experience extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			 $this->load->model('Backend/Experience_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	       
		    $data['experienceList'] = $this->Experience_Model->getExperienceList();

			$data['main_content'] = 'admin/experience/experience';
			$this->load->view('layouts/admin_template', $data);
		}


		function addExperience()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('experience', 'Experience Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Experience_Model->addExperienceData();
					redirect('admin/experience');
	        	}
	        }

			$data['main_content'] = 'admin/experience/add_experience';
			$this->load->view('layouts/admin_template', $data);

		}


		function editExperience($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {				
				if ($result = $this->Experience_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('exp_id', $id)
	                            ->get('maid_experience')->first_row('array');
	        $data['experience_data'] = $result;


			$data['main_content'] = 'admin/experience/edit_experience';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteExperience($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Experience_Model->delete($id);

			redirect('admin/experience');
		}




	}// End Class


?>