<?php
	/**
	* 
	*/
	class Services extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library("pagination");
			$this->load->Model('Pages_Model');
			$this->load->Model('Frontend/Services_Model');
		}


		function index()
		{
			 $data['services'] = $this->Services_Model->get_all_services();
			//$data['services'] = $this->Services_Model->get_all_services();
			$data['main_content'] = 'services';
			$this->load->view('layouts/template', $data);
		}

	}// End Class
?>
