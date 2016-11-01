<?php
	/**
	* 
	*/
	class Countries extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Countries_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
	        
		    $data['countriesList'] = $this->Countries_Model->getCountriesList();

			$data['main_content'] = 'admin/countries/countries';
			$this->load->view('layouts/admin_template', $data);
		}


		function addCountry()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('country_name', 'Country Name', 'required');
	        	$this->form_validation->set_rules('nationality', 'Nationality', 'required');

	        	if ($this->form_validation->run() == FALSE) {
	        		//$this->session->set_flashdata('alert_text', validation_errors());
	        	}else{
					$this->Countries_Model->addCountryData();
					redirect('admin/countries');
	        	}

	        }

			$data['main_content'] = 'admin/countries/add_country';
			$this->load->view('layouts/admin_template', $data);
		}


		function editCountry($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
	        
			if ($this->input->post()) {				
				//$data['country_data'] = $this->Countries_Model->edit($id);
				if ($result = $this->Countries_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}

			}
			
			$result = $this->db->where('country_id', $id)
	                            ->get('maid_countries')->first_row('array');
	        $data['country_data'] = $result;


			$data['main_content'] = 'admin/countries/edit_country';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteCountry($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Countries_Model->delete($id);

			redirect('admin/countries');
		}




	}//End Class


?>