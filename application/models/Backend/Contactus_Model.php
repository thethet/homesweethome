<?php
	/**
	* 
	*/
	class Contactus_Model extends CI_Model
	{
		
		function __construct()
		{
			// parent::__construct();
		}
		public function get_persons(){
			$sql = sprintf("select * from maid_testimonials");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_person_byid($id){
			$sql = sprintf("select * from maid_testimonials where testi_id=%d",$id);
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_image($id){
			$sql = sprintf("select testi_image from maid_testimonials where testi_id=%d",$id);
			$query = $this->db->query($sql);
			$image = '';
			if($query->result_array()){
				$data = $query->result_array();
				$data = array_shift($data);
				$image = $data['testi_image'];
				
			}
			return $image;
		}
		public function get_contactus(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","contactus");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_main_branch(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","main_branch");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_main_contact_person(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","main_contact_person");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_other_branch(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","other_branch");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_other_contact_person(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","other_contact_person");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_social(){
			$sql = sprintf("select * from maid_pages where page_parent='%s'","contact_social");
			$query = $this->db->query($sql);
			return $query->result_array();
		}



	}// End class


?>