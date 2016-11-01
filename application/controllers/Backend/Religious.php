<?php
	/**
	* 
	*/
	class Religious extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Religious_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
   
		    $data['religiousList'] = $this->Religious_Model->getReligiousList();

			$data['main_content'] = 'admin/religious/religious';
			$this->load->view('layouts/admin_template', $data);
		}

		function addReligious()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('religious_name', 'Religious Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Religious_Model->addReligiousData();
					redirect('admin/religious');
	        	}
	        }

			$data['main_content'] = 'admin/religious/add_religious';
			$this->load->view('layouts/admin_template', $data);

		}


		function editReligious($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
	        
			if ($this->input->post()) {				
				if ($result = $this->Religious_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('reli_id', $id)
	                            ->get('maid_religious')->first_row('array');
	        $data['religious_data'] = $result;


			$data['main_content'] = 'admin/religious/edit_religious';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteReligious($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Religious_Model->delete($id);

			redirect('admin/religious');
		}




	}//End Class


?>