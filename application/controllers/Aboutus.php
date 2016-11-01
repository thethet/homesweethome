<?php
	/**
	* 
	*/
	class Aboutus extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Pages_Model');
		}


		function index()
		{
			$data['main_content'] = 'aboutus';
			$this->load->view('layouts/template', $data);
		}
		function mailsend(){
			$data['returnname'] = '';
			if($this->input->post()){
				$data['returnname'] = $this->Pages_Model->aboutusmailsend();
			}
			$data['main_content'] = 'aboutus';
			$this->load->view('layouts/template', $data);
		}

	}// End Class
?>
