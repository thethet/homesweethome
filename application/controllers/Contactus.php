<?php
	/**
	* 
	*/
	class Contactus extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Pages_Model');
			$this->load->Model('Frontend/Contactus_Model');
		}


		function index()
		{
			$data['main_content'] = 'contactus';
			$this->load->view('layouts/template', $data);
		}
		

	}// End Class
?>
