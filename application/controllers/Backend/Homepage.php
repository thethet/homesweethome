<?php
	/**
	* 
	*/
	class Homepage extends CI_Controller
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
				$update['page_title'] = $this->input->post('title');
				$update['page_content'] = $this->input->post('description');
				$this->db->where('page_parent','homepage')
					 ->update('maid_pages',$update);	
			endif;
			$data['homepage'] = $this->db->where('page_parent','homepage')->get('maid_pages')->first_row('array');
			$data['main_content'] = 'admin/homepage/homepage';
			$this->load->view('layouts/admin_template', $data);

		}




	}//End Class
?>