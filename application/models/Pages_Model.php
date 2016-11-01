<?php 
	if (!defined('BASEPATH')) exit ('No direct script access allowed');

	/**
	* 
	*/
	class Pages_Model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}
		function get_id($para)
		{
			$page_id='';
			if($para != ''){
		     	$sql = sprintf("select page_id from maid_pages where page_parent='%s'",$para);
				$query = $this->db->query($sql);
				if($query->result_array())
				{
					$result = $query->result_array();
					$result = array_shift($result);
					$page_id = $result['page_id'];
				}
			}
			return $page_id;
		}

		function get_image($para)
		{
			$page_image='';
			if($para != ''){
		     	$sql = sprintf("select page_image from maid_pages where page_id=%d",$para);
				$query = $this->db->query($sql);
				if($query->result_array())
				{
					$result = $query->result_array();
					$result = array_shift($result);
					$page_image = $result['page_image'];
				}
			}
			return $page_image;
		}
		function getFavicon()
		{
			$query = $this->db->where('page_parent','favicon')
					 ->get('maid_pages')->first_row('array');		

			return $query;
		}
		function getSitename()
		{
			$query = $this->db->where('page_parent','site_name')
					 ->get('maid_pages')->first_row('array');		

			return $query;
		}
		function getSitelogo()
		{
			$query = $this->db->where('page_parent','site_logo')
					 ->get('maid_pages')->first_row('array');		

			return $query;
		}
		public function returnbycondistring($selectname='',$table='',$condi='',$para=''){
			$sql = sprintf("select %s from %s where %s='%s'",$selectname,$table,$condi,$para);
			$query = $this->db->query($sql);
			$returnname = '';
			if($query->result_array()){
				$data = $query->result_array();
				$data = array_shift($data);
				$returnname = $data[$selectname];
			}
			return $returnname;
		}
		public function get_home_services(){
			$sql = sprintf("SELECT * FROM maid_pages WHERE page_parent='services' ORDER BY page_id DESC");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_home_maids(){
			$sql = sprintf("SELECT 		maid.`maid_id`,maid.`maid_image`,maid.`maid_age`,maid.`maid_name`,maid.`maid_salary`,maid.`maid_day_off`,countries.`country_citizen`,maidtype.`type_name`
				FROM maid_maids AS maid
				INNER JOIN maid_countries AS countries
				ON maid.`maid_from`=countries.`country_id`
				INNER JOIN maid_type AS maidtype
				ON maid.`maid_type`=maidtype.`type_id`
				ORDER BY maid.`maid_id` DESC 
				LIMIT 6");
				
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function mailsend(){
			date_default_timezone_set('Asia/Bangkok');
			$returnname = '';
			$name = $this->input->post('txtname');
			$from_email = $this->input->post('txtemail');
			$cnt_phone = $this->input->post('txtphone');
			$cnt_message = $this->input->post('txtmessage');
			
			$subject = "Home Sweet Home Form Email";
			$to_email = "soethiha@innov8te.com.sg";
			
			$message = '<p>Name : '.$name.'</p>
						<p>Phone : '.$cnt_phone.'</p>
						<p>Message : '.$cnt_message.'</p>';
						
			//send mail
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            //$this->email->bcc($cc_email);
            $this->email->subject($subject);
            $this->email->message($message);	
			
			if ($this->email->send())
            {
				$returnname = 'Send Successfully';
            }
            else
            {	
				$returnname = "Can't Send";
            }
			return $returnname;
		}
		public function aboutusmailsend(){
			date_default_timezone_set('Asia/Bangkok');
			$returnname = '';
			$name = $this->input->post('name');
			$from_email = $this->input->post('email');
			$cnt_phone = $this->input->post('phone');
			$cnt_message = $this->input->post('issues');
			
			$subject = "Home Sweet Home Form Email";
			$to_email = "soethiha@innov8te.com.sg";
			
			$message = '<p>Name : '.$name.'</p>
						<p>Phone : '.$cnt_phone.'</p>
						<p>Message : '.$cnt_message.'</p>';
						
			//send mail
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            //$this->email->bcc($cc_email);
            $this->email->subject($subject);
            $this->email->message($message);	
			
			if ($this->email->send())
            {
				$returnname = 'Send Successfully';
            }
            else
            {	
				$returnname = "Can't Send";
            }
			return $returnname;
		}
		public function get_info_available($id){
			$sql = sprintf("select info_available from maid_maid_info where info_maid_id=%d",$id);
			$query = $this->db->query($sql);
			$info = '';
			if($query->result_array()){
				$data = $query->result_array();
				$info = array_shift($data);
				$info = $info['info_available'];
			}
			return $info;
		}
			
		
	}//End Class



?>