<?php
	/**
	* 
	*/
	class Type extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Type_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	       
		    $data['typeList'] = $this->Type_Model->getTypeList();
			

			$data['main_content'] = 'admin/type/type';
			$this->load->view('layouts/admin_template', $data);
		}


		function addType()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('type_name', 'Type Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Type_Model->addTypeData();
					redirect('admin/type');
	        	}
	        }

			$data['main_content'] = 'admin/type/add_type';
			$this->load->view('layouts/admin_template', $data);

		}


		function editType($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {				
				if ($result = $this->Type_Model->edit($id)) {
					$this->session->set_flashdata('alert_text', 'Successfully update !');
				}
			}
			
			$result = $this->db->where('type_id', $id)
	                            ->get('maid_type')->first_row('array');
	        $data['type_data'] = $result;


			$data['main_content'] = 'admin/type/edit_type';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteType($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Type_Model->delete($id);

			redirect('admin/type');
		}




	}// End Class


?>