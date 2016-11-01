<?php
	/**
	* 
	*/
	class Banner extends CI_Controller
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
				$type = array("homepage_banner","aboutus_banner","contactus_banner","service_banner","maid_banner");
				$run = 0;
				while($run<count($type)){
					$img = $type[$run].'_img';
							if (isset($_FILES[$img]['name']) && !empty($_FILES[$img]["name"])) {
							$this->load->library('upload');
							$config['max_size'] = 5000;
							$config['allowed_types'] = "jpg|gif|jpeg|png";
							$config['encrypt_name'] = true;
							$config['upload_path'] = "uploads/banner";	            
							$this->upload->initialize($config);
							if (!$this->upload->do_upload($img)) {
								return false;
							} else {
								$uploadedImage = $this->upload->data();
								$up_data['page_image'] = $uploadedImage["file_name"];
								$id = $this->Pages_Model->get_id($type[$run]);
								$old_image = $this->Pages_Model->get_image($id);
								if($old_image){
									$path ='uploads/banner/'.$old_image;
									if(is_file($path)){
										unlink($path);
									}
								}
							}

						}
				
					  $up_data['page_title'] = $this->input->post($type[$run].'_title');
					  $this->db->where('page_parent',$type[$run])
					 ->update('maid_pages',$up_data);
					  $run++;
				}
				
			endif;
			$data['homepage'] = $this->db->where('page_parent','homepage_banner')->get('maid_pages')->first_row('array');
			$data['aboutus'] = $this->db->where('page_parent','aboutus_banner')->get('maid_pages')->first_row('array');
			$data['contactus'] = $this->db->where('page_parent','contactus_banner')->get('maid_pages')->first_row('array');
			$data['service'] = $this->db->where('page_parent','service_banner')->get('maid_pages')->first_row('array');
			$data['maid'] = $this->db->where('page_parent','maid_banner')->get('maid_pages')->first_row('array');
			
			$data['main_content'] = 'admin/banner/banner';
			$this->load->view('layouts/admin_template', $data);

		}



	}//End Class
?>