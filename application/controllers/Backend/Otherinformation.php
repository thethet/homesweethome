<?php
	/**
	* 
	*/
	class Otherinformation extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Otherinfo_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
			  
		    $data['otherinfoList'] = $this->Otherinfo_Model->getOtherinfoList();

			$data['main_content'] = 'admin/otherinformation/otherinformation';
			$this->load->view('layouts/admin_template', $data);
		}

		function addOtherinfo()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('other_info_name', 'Other Information Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Otherinfo_Model->addOtherinfoData();
					redirect('admin/other_information');
	        	}
	        }

			$data['main_content'] = 'admin/otherinformation/add_other_information';
			$this->load->view('layouts/admin_template', $data);

		}


		function editOtherinfo($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {				
				if ($result = $this->Otherinfo_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('oth_id', $id)
	                            ->get('maid_other_information')->first_row('array');
	        $data['otherinfo_data'] = $result;


			$data['main_content'] = 'admin/otherinformation/edit_other_information';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteOtherinfo($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Otherinfo_Model->delete($id);

			redirect('admin/other_information');
		}






	}// End Class


?>