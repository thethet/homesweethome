<?php
	/**
	* 
	*/
	class Marital extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();	
			$this->load->model('Backend/Marital_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

		    $data['maritalList'] = $this->Marital_Model->getMaritalList();

			$data['main_content'] = 'admin/marital/marital';
			$this->load->view('layouts/admin_template', $data);
		}


		function addMarital()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Marital_Model->addMaritalData();
					redirect('admin/marital');
	        	}
	        }

			$data['main_content'] = 'admin/marital/add_marital';
			$this->load->view('layouts/admin_template', $data);

		}


		function editMarital($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {				
				if ($result = $this->Marital_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('marital_id', $id)
	                            ->get('maid_marital')->first_row('array');
	        $data['marital_data'] = $result;


			$data['main_content'] = 'admin/marital/edit_marital';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteMarital($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Marital_Model->delete($id);

			redirect('admin/marital');
		}


	}//End Class


?>