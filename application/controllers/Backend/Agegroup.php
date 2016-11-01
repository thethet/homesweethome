<?php
	/**
	* 
	*/
	class Agegroup extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Agegroup_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	    
		    $data['ageList'] = $this->Agegroup_Model->getAgeList();

			$data['main_content'] = 'admin/agegroup/agegroup';
			$this->load->view('layouts/admin_template', $data);
		}


		function addAge()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('start', 'Age group start', 'required');
	        	$this->form_validation->set_rules('end', 'Age group end', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Agegroup_Model->addAgeData();
					redirect('admin/age');
	        	}
	        }

			$data['main_content'] = 'admin/agegroup/add_age';
			$this->load->view('layouts/admin_template', $data);

		}


		function editAge($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {				
				if ($result = $this->Agegroup_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('age_id', $id)
	                            ->get('maid_age_group')->first_row('array');
	        $data['age_data'] = $result;


			$data['main_content'] = 'admin/agegroup/edit_age';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteAge($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Agegroup_Model->delete($id);

			redirect('admin/age');
		}




	}// End Class


?>