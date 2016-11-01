<?php
	/**
	* 
	*/
	class Settings extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('upload');
		}

		function index()
		{
			if (!isLogin()) {
	            redirect('admin');
	        }
	        
			$data = array();


			/********************************************/
			$uploadedImage = array();     

			if (isset($_FILES["faviconimg"]['name']) && !empty($_FILES["faviconimg"]["name"])) {
	            // upload favicon image
	            $this->load->library('upload');
	            $config['max_size'] = 5000;
	            $config['allowed_types'] = "jpg|gif|jpeg|png";
	            $config['encrypt_name'] = true;
	            $config['upload_path'] = "uploads/";
	            // $config['max_width'] = 32;
            	// $config['max_height'] = 32;	            
	            $this->upload->initialize($config);
	            if (!$this->upload->do_upload("faviconimg")) {
	                return false;
	            } else {
	                $uploadedImage_favicon = $this->upload->data();
	            }


	            $this->db->where('page_parent', 'favicon')
					 ->update('maid_pages', array("page_image" => $uploadedImage_favicon["file_name"]));

	        }
	        

	        if (isset($_FILES["sitelogoimg"]['name']) && !empty($_FILES["sitelogoimg"]["name"])) {
	            // upload site logo image
	            $this->load->library('upload');
	            $config['max_size'] = 5000;
	            $config['allowed_types'] = "jpg|gif|jpeg|png";
	            $config['encrypt_name'] = true;
	            $config['upload_path'] = "uploads/";
	            //$config['max_width'] = 150;
            	//$config['max_height'] = 150;	            
	            $this->upload->initialize($config);
	            if (!$this->upload->do_upload("sitelogoimg")) {
	                return false;
	            } else {
	                $uploadedImage_sitelogo = $this->upload->data();
	            }

	            $this->db->where('page_parent', 'site_logo')
					 ->update('maid_pages', array("page_image" => $uploadedImage_sitelogo["file_name"]));
	        }


			/*********************************************/

			if($this->input->post()){
				
				if($this->input->post('sitename')){
					$this->db->where('page_parent', 'site_name')
					 ->update('maid_pages', array("page_name" => $this->input->post('sitename')));
				}
				if($this->input->post('siteheadername')){
					$this->db->where('page_parent', 'site_header_name')
					 ->update('maid_pages', array("page_name" => $this->input->post('siteheadername')));
				}	

			}			

			$data['sitename'] = $this->db->where('page_parent','site_name')->get('maid_pages')->first_row('array');	
			$data['siteheadername'] = $this->db->where('page_parent','site_header_name')->get('maid_pages')->first_row('array');
			$data['faviconimg'] = $this->db->where('page_parent','favicon')->get('maid_pages')->first_row('array');
			$data['sitelogoimg'] = $this->db->where('page_parent','site_logo')->get('maid_pages')->first_row('array');						

			$data['main_content'] = 'admin/settings/settings';
			$this->load->view('layouts/admin_template', $data);

		}




	}//End Class
?>