<?php
	/**
	* 
	*/
	class Aboutus extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('upload');
			$this->load->Model('Pages_Model');
		}

		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
	        
			$data = array();						
			if($this->input->post()):
				$update = array();
				$update['page_name'] = $this->input->post('title');
				$update['page_content'] = $this->input->post('description');
				$update['page_title'] = $this->input->post('excerpt');
				$this->db->where('page_parent','aboutus')
					 ->update('maid_pages',$update);	
			endif;
			$data['aboutus'] = $this->db->where('page_parent','aboutus')->get('maid_pages')->first_row('array');
			$data['main_content'] = 'admin/aboutus/aboutus';
			$this->load->view('layouts/admin_template', $data);

		}




	}//End Class
?>