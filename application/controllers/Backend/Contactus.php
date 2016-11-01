<?php
	/**
	* 
	*/
	class Contactus extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('upload');
			$this->load->library("pagination");
			$this->load->model('Backend/Contactus_Model');
			$this->load->model('Pages_Model');
		}

		function index()
		{
		}
		
		public function contact_address(){
			if($this->input->post()){
				
				$contact = array(
					'page_name' => $this->input->post('contact_license'),
					'page_updated_by' => $this->input->post('contact_email'),
					'page_content' => $this->input->post('contact_website'),
					'page_title' => $this->input->post('contactexcerpt')
					);
				$this->db->update('maid_pages',$contact,array('page_parent'=>'contactus'));
				
				$main_contact = array(
					'page_name' => $this->input->post('main_fax'),
					'page_title' => $this->input->post('main_hours'),
					'page_content' => $this->input->post('main_address'),
					'page_image' => $this->input->post('main_email'),
					'page_updated_by' => $this->input->post('main_phone')
					);
				$this->db->update('maid_pages',$main_contact,array('page_parent'=>'main_branch'));
				
				$main_contact = array(
					'page_title' => $this->input->post('main_cpg'),
					'page_content' => $this->input->post('main_cp')
					);
				$this->db->update('maid_pages',$main_contact,array('page_parent'=>'main_contact_person'));
				
				$other_contact = array(
					'page_name' => $this->input->post('other_fax'),
					'page_title' => $this->input->post('other_hours'),
					'page_content' => $this->input->post('other_address'),
					'page_image' => $this->input->post('other_email'),
					'page_updated_by' => $this->input->post('other_phone')
					);
				$this->db->update('maid_pages',$other_contact,array('page_parent'=>'other_branch'));

				$other_contact = array(
					'page_title' => $this->input->post('other_cpg'),
					'page_content' => $this->input->post('other_cp')
					);
				$this->db->update('maid_pages',$other_contact,array('page_parent'=>'other_contact_person'));	
				
				$social = array(
					'page_name' => $this->input->post('facebook'),
					'page_title' => $this->input->post('twitter'),
					'page_content' => $this->input->post('linkedin')
					);
				$this->db->update('maid_pages',$social,array('page_parent'=>'contact_social'));
			}
			$contactus = $this->Contactus_Model->get_contactus();
			$data['contactus'] = array_shift($contactus);
			$main_branch = $this->Contactus_Model->get_main_branch();
			$data['main_branch'] = array_shift($main_branch);
			$main_contact_person = $this->Contactus_Model->get_main_contact_person();
			$data['main_contact_person'] = array_shift($main_contact_person);
			$other_branch = $this->Contactus_Model->get_other_branch();
			$data['other_branch'] = array_shift($other_branch);
			$other_contact_person = $this->Contactus_Model->get_other_contact_person();
			$data['other_contact_person'] = array_shift($other_contact_person);
			$social = $this->Contactus_Model->get_social();
			$data['social'] = array_shift($social);
			$data['main_content'] = 'admin/contactus/address';
			$this->load->view('layouts/admin_template', $data);
		}
		
	}//End Class
?>