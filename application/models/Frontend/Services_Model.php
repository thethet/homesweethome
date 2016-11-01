<?php 
	if (!defined('BASEPATH')) exit ('No direct script access allowed');

	/**
	* 
	*/
	class Services_Model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}
		public function get_all_services(){
			$sql = sprintf("SELECT * FROM maid_pages WHERE page_parent='services' order by page_id DESC");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function record_count(){
			 $sql = sprintf("select count(*) as servicecount from maid_pages where page_parent='services'");
			 $query = $this->db->query($sql);
			 $servicecount = '';
			 if($query->result_array()){
				$data = $query->result_array();
				$data = array_shift($data);
				$servicecount = $data['servicecount'];
			 }
			 return $servicecount;
		}
		public function getservicepagination($param){
			$limit = $param['limit'];
			$offset = $param['start'];
			$sql = sprintf("SELECT * FROM maid_pages WHERE page_parent='services' order by page_id DESC limit %d offset %d",$limit,$offset);
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		
	}//End Class



?>