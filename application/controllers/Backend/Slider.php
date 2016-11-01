<?php
	/**
	* 
	*/
	class Slider extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Backend/Slider_Model');
		}


		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
  
		    $data['sliderList'] = $this->Slider_Model->getSliderList();

			$data['main_content'] = 'admin/slider/slider';
			$this->load->view('layouts/admin_template', $data);
		}


		function addSlider($validation = '')
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
			if($this->input->post()){
	        	$this->load->library('form_validation');
	        	$this->form_validation->set_rules('slider_name', 'Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
					$this->Slider_Model->addSliderData();
					redirect('admin/slider');
	        	}
	        }
			$data['validation'] = $validation;

			$data['main_content'] = 'admin/slider/add_slider';
			$this->load->view('layouts/admin_template', $data);

		}


		function editSlider($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }	        
	        
			if ($this->input->post()) {	
				$this->load->library('form_validation');
	        	$this->form_validation->set_rules('slider_name', 'Name', 'required');

	        	if ($this->form_validation->run() == FALSE) {

	        	}else{
	        		if ($result = $this->Slider_Model->edit($id)) {
						$this->session->set_flashdata('alert_text', 'Successfully update !');
					}
	        	}		
				
			}
			
			$result = $this->db->where('slide_id', $id)
	                            ->get('maid_slider')->first_row('array');
	        $data['slider_data'] = $result;


			$data['main_content'] = 'admin/slider/edit_slider';
			$this->load->view('layouts/admin_template', $data);
		}


		function deleteSlider($id=0)
		{
			if (!isLogin()) {
	            redirect('admin');
	        }

	        $this->Slider_Model->delete($id);

			redirect('admin/slider');
		}




	}// End Class


?>