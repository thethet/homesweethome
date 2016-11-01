<?php
	/**
	* 
	*/
	class Services extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('upload');
			$this->load->library("pagination");
			$this->load->model('Pages_Model');
		}

		function index()
		{
			$this->services_list();
			$this->data['main_content'] = 'admin/services/services';
			$this->load->view('layouts/admin_template', $this->data);

		}
		public function add(){
			$data['main_content'] = 'admin/services/add_service';
			$this->load->view('layouts/admin_template', $data);
		}
		public function save(){
			if($this->input->post()){
			
				if (isset($_FILES["serviceimg"]['name']) && !empty($_FILES["serviceimg"]["name"])) {
					// upload site logo image
					$this->load->library('upload');
					$config['max_size'] = 5000;
					$config['allowed_types'] = "jpg|gif|jpeg|png";
					$config['encrypt_name'] = true;
					$config['upload_path'] = "uploads/services";	            
					$this->upload->initialize($config);
					if (!$this->upload->do_upload("serviceimg")) {
						return false;
					} else {
						$uploadedImage_service= $this->upload->data();
					}
				}
				if(isset($uploadedImage_service)){
					$data = array(
						'page_parent' => 'services',
						'page_title' => $this->input->post('title'),
						'page_content' => $this->input->post('description'),
						'page_image' => $uploadedImage_service['file_name']
						);
				}else{
					$data = array(
						'page_parent' => 'services',
						'page_title' => $this->input->post('title'),
						'page_content' => $this->input->post('description')
						);
				}
				$this->db->insert('maid_pages',$data);
			}
			$this->services_list();
			$this->data['main_content'] = 'admin/services/services';
			$this->load->view('layouts/admin_template', $this->data);
		}
		public function edit($id){
			$query = $this->db->get_where('maid_pages',array('page_id'=>$id));
			$data['service'] = $query->result_array();
			$data['service'] = array_shift($data['service']);
			$data['main_content'] = 'admin/services/edit_service';
			$this->load->view('layouts/admin_template', $data);
		}
		public function update($id){
			if($this->input->post()){
				if (isset($_FILES["serviceimg"]['name']) && !empty($_FILES["serviceimg"]["name"])) {
					// upload site logo image
					$this->load->library('upload');
					$config['max_size'] = 5000;
					$config['allowed_types'] = "jpg|gif|jpeg|png";
					$config['encrypt_name'] = true;
					$config['upload_path'] = "uploads/services";	            
					$this->upload->initialize($config);
					if (!$this->upload->do_upload("serviceimg")) {
						return false;
					} else {
						$uploadedImage_service= $this->upload->data();
						$old_image = $this->Pages_Model->get_image($id);
						if($old_image){
							$path ='uploads/services/'.$old_image;
							if(is_file($path)){
								unlink($path);
							}
						}
					}
				}
				if(isset($uploadedImage_service)){
					$data = array(
						'page_parent' => 'services',
						'page_title' => $this->input->post('title'),
						'page_content' => $this->input->post('description'),
						'page_image' => $uploadedImage_service['file_name']
						);
				}else{
					$data = array(
						'page_parent' => 'services',
						'page_title' => $this->input->post('title'),
						'page_content' => $this->input->post('description')
						);
				}
				$this->db->update('maid_pages',$data,array('page_id'=>$id));
			}
			$this->services_list();
			$this->data['main_content'] = 'admin/services/services';
			$this->load->view('layouts/admin_template', $this->data);
		}
		public function delete($id){
			if($id){
				$old_image = $this->Pages_Model->get_image($id);
				if($old_image){
					$path ='uploads/services/'.$old_image;
					if(is_file($path)){
						unlink($path);
					}
				}
				$this->db->delete('maid_pages',array('page_id'=>$id));
			}
			$this->services_list();
			$this->data['main_content'] = 'admin/services/services';
			$this->load->view('layouts/admin_template', $this->data);
		}
		public function services_list(){
			
			$query = $this->db->get_where('maid_pages',array('page_parent'=>'services'));
			$count = $query->num_rows();
			/* pagination */
			$query =
			$config = array();
			$config["base_url"] = base_url() . "/admin/save_service/?";
			$config["total_rows"] =  $count;
			$config["per_page"] = 7;
			$config["uri_segment"] = 3;
	        $config['use_page_numbers'] = TRUE;	
			$config['page_query_string'] = TRUE;
			$config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
	        $config['next_tag_open'] = '<li class="nex">';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			
			if(isset($_GET['per_page'])){
				$lastpath = $_SERVER['QUERY_STRING'];
				$page_no = substr($lastpath,10);
				if($page_no < 1){
					$page_no = 1;
				}
				$offset = ($page_no - 1) * $config['per_page'];
			}
			else{
			
				$offset = 0;
				
			}
	
			
			$param['limit'] = $config['per_page'];
        	$param['start'] = $offset;
	        $this->data["links"] = $this->pagination->create_links();
			
			$query = $this->db->get_where('maid_pages',array('page_parent'=>'services'),$param['limit'],$param['start']);
			$this->data['services'] = $query->result_array();
		}
		public function services_overview(){
			if($this->input->post()){
				$update = array();
				if (isset($_FILES["overviewimg"]['name']) && !empty($_FILES["overviewimg"]["name"])) {
					$this->load->library('upload');
					$config['max_size'] = 5000;
					$config['allowed_types'] = "jpg|gif|jpeg|png";
					$config['encrypt_name'] = true;
					$config['upload_path'] = "uploads/services";	            
					$this->upload->initialize($config);
					if (!$this->upload->do_upload("overviewimg")) {
						return false;
					} else {
						$uploadedImage_overviewimg = $this->upload->data();
						$update['page_image'] = $uploadedImage_overviewimg["file_name"];
						$id = $this->Pages_Model->get_id('serviceoverview');
						$old_image = $this->Pages_Model->get_image($id);
						if($old_image){
							$path ='uploads/services/'.$old_image;
							if(is_file($path)){
								unlink($path);
							}
						}
					}

				}
				$update['page_title'] = $this->input->post('title');
				$this->db->where('page_parent','serviceoverview')
					 ->update('maid_pages',$update);
			}
			$data['overview'] = $this->db->where('page_parent','serviceoverview')->get('maid_pages')->first_row('array');
			$data['main_content'] = 'admin/services/services_overview';
			$this->load->view('layouts/admin_template', $data);
		}




	}//End Class
?>