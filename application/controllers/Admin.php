<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('cookie');
		}

		public function index()
		{
			$this->login();
		}
		
		public function login()
		{
			$data = array();

			if($this->input->post()){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Please enter username!', 'required');
				$this->form_validation->set_rules('password', 'Please enter password!', 'required');

				if ($this->form_validation->run() == FALSE)
                {
	                // $validation_errors = validation_errors();
	            }else{
					if($this->input->post('remember')){
						$year = time() + 31536000;
						set_cookie('username', $this->input->post('username'), $year);
						set_cookie('password', $this->input->post('password'), $year);
						set_cookie('remember_me', $this->input->post('remember'), $year);
					}else{
						delete_cookie("username");
						delete_cookie("password");
						delete_cookie("remember_me");
					}
	                $this->load->model('Backend/Auth_Model');
	                $result = $this->Auth_Model->validate();
	                if ($result) {
	                    $this->session->set_flashdata('alert_text', 'Welcome!.');
						if($this->session->userdata('user_role') == 3){
							redirect('admin/maids');
						}else{
							redirect('admin/settings');
						}
	                } else {
	                    //$data['alert']['text'] = 'Invalid Email (or) Password.Please try again.';
	                    $this->session->set_flashdata('alert_text', 'Invalid Username (or) Password.Please try again.');
	           		}
            	}

			}//end if

			$this->load->view('login', $data);

		}


		function logout()
		{
			$this->session->sess_destroy();
        	redirect('admin', 'refresh');
		}


	}//End Class

?>